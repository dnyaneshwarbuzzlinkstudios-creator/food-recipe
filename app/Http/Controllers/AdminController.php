<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    protected $loginid;

    public function __construct()
    {
        // Start session
        $this->loginid = Session::get('id');
    }

    public function login()
    {
        $data['metatitle'] = "Admin Login";
        return view('admin.login', $data);
    }

    public function dashboard()
    {
        $data['metatitle'] = "Dashboard";
        return view('admin.dashboard', $data);
    }

    public function adminLogin(Request $request)
    {
        $email = trim($request->input('email'));
        $password = trim($request->input('password'));
        $arr = [];
    
        $user = DB::table('users')->where('email', $email)->first();
    
        if ($user) {
            $loginOk = false;
    
            // Try bcrypt check
            if (Hash::check($password, $user->password)) {
                $loginOk = true;
            }
            // Try MD5 check and upgrade to bcrypt
            elseif ($user->password === md5($password)) {
                $loginOk = true;
                DB::table('users')->where('id', $user->id)->update([
                    'password' => Hash::make($password)
                ]);
            }
    
            if ($loginOk) {
                $ses_data = [
                    'id' => $user->id,
                    'email' => $user->email,
                    'isAdminLoggedIn' => true,
                ];
                Session::put($ses_data);
    
                $arr['status'] = 1;
                $arr['msg'] = 'Login Successful';
            } else {
                $arr['status'] = 0;
                $arr['msg'] = 'Incorrect Password';
            }
        } else {
            $arr['status'] = 0;
            $arr['msg'] = 'Email ID not registered';
        }
    
        return response()->json($arr);
    }
    

    

    public function logout()
    {
        if (Session::has('isAdminLoggedIn')) {
            Session::forget('isAdminLoggedIn');
            return redirect('admin');
        }
    }

    public function AdminUsers()
    {
        $data['metatitle'] = "All Admin";
        $data['alldata'] = DB::table('users')->get();
        return view('admin.system.all-users', $data);
    }

    public function AdminAddUser()
    {
        $data['metatitle'] = "Add Admin";
        return view('admin.system.add-user', $data);
    }

    public function AdminEditUser($id)
    {
        $data['userdet'] = DB::table('users')->where('id', $id)->first();
        $data['metatitle'] = "Update Admin";
        return view('admin.system.edit-user', $data);
    }

    public function AdminCreateUser(Request $request)
    {
        $username = trim($request->input('username'));
        $email = trim($request->input('email'));
        $password = trim($request->input('password'));

        $errors = [];

        // Email validation
        if (empty($email)) {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email address.';
        } else {
            $count = DB::table('users')->where('email', $email)->count();
            if ($count > 0) {
                $errors['email'] = 'This email is already registered.';
            }
        }

        // Password validation
        if (empty($password)) {
            $errors['password'] = 'Password is required.';
        } elseif (strlen($password) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        }

        if (!empty($errors)) {
            return redirect()->back()->withInput()->with('errors', $errors);
        } else {
            $insert = DB::table('users')->insert([
                'name' => $username,
                'email' => $email,
                'password' => Hash::make($password)
            ]);

            if ($insert) {
                Session::flash('success', 'New Admin added successfully.');
                return redirect('admin/system/users');
            } else {
                $errors['other'] = 'Something went wrong. try again later.';
                return redirect()->back()->withInput()->with('errors', $errors);
            }
        }
    }

    public function AdminUpdateUser(Request $request)
    {
        $userid = trim($request->input('userid'));
        $username = trim($request->input('username'));
        $email = trim($request->input('email'));
        $password = trim($request->input('password'));

        $errors = [];

        // Email validation
        if (empty($email)) {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email address.';
        } else {
            $count = DB::table('users')
                ->where('email', $email)
                ->where('id', '!=', $userid)
                ->count();
            if ($count > 0) {
                $errors['email'] = 'This email is already registered.';
            }
        }

        // Password validation
        if (!empty($password) && strlen($password) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        }

        if (!empty($errors)) {
            return redirect()->back()->withInput()->with('errors', $errors);
        } else {
            $updateData = [
                'name' => $username,
                'email' => $email,
            ];

            if (!empty($password)) {
                $updateData['password'] = Hash::make($password); // ✅
            }
            

            $updated = DB::table('users')->where('id', $userid)->update($updateData);

            if ($updated) {
                Session::flash('success', 'Admin details updated successfully.');
                return redirect('admin/system/users');
            } else {
                $errors['other'] = 'Something went wrong. try again later.';
                return redirect()->back()->withInput()->with('errors', $errors);
            }
        }
    }

    public function DeleteAdmin(Request $request)
    {
        $deleteId = $request->input('deleteId');
        $deleted = DB::table('users')->where('id', $deleteId)->delete();

        if ($deleted) {
            Session::flash('success', 'Record deleted successfully.');
            return redirect('admin/system/users');
        } else {
            Session::flash('error', 'Something went wrong. try again later.');
            return redirect('admin/system/users');
        }
    }
}
