<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddRecipeController;


// Public Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/recipes', [HomeController::class, 'recipe'])->name('recipes');

// Admin Routes (no middleware)
Route::get('admin', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'adminLogin'])->name('admin.doLogin');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/system/users', [AdminController::class, 'AdminUsers'])->name('admin.users');
Route::get('admin/system/add-user', [AdminController::class, 'AdminAddUser'])->name('admin.addUser');
Route::post('admin/system/create-user', [AdminController::class, 'AdminCreateUser'])->name('admin.createUser');
Route::get('admin/system/edit-user/{id}', [AdminController::class, 'AdminEditUser'])->name('admin.editUser');
Route::post('admin/system/update-user', [AdminController::class, 'AdminUpdateUser'])->name('admin.updateUser');
Route::post('admin/system/delete-admin', [AdminController::class, 'DeleteAdmin'])->name('admin.deleteUser');


// Recipe routes

Route::prefix('admin')->group(function () {
    Route::resource('recipes', AddRecipeController::class);
});

// web.php
Route::get('/recipe/{id}', [HomeController::class, 'show'])->name('recipe.show');
