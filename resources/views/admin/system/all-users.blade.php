<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.include.head')
  </head>
  <body>
    
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      
      <!-- Sidebar Start -->
      @include('admin.include.sidebar')
      <!-- Sidebar End -->

      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        @include('admin.include.header')
        <!--  Header End -->

        <div class="container-fluid">
            <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                <div class="card-body px-4 py-3">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <h4 class="fw-semibold mb-8">Admin</h4>
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a class="text-muted" href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item" aria-current="page">Admin</li>
                        </ol>
                      </nav>
                    </div>
                    <div class="col-3">
                      <div class="text-center">  
                        <!--<img src="{{ asset('dist/images/breadcrumb/ChatBc.png') }}" alt="" class="img-fluid mb-n4">-->
                        <a href="{{ url('admin/system/add-user') }}" class="btn btn-primary">Add New</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @include('admin.include.flash')

                    <div class="table-responsive m-t-40">
                        <table id="config-table" class="table border display table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sr = 0; @endphp
                                @foreach($alldata as $ci)
                                    @php $sr++; @endphp
                                    <tr>
                                        <td>{{ $ci->id }}</td>
                                        <td>{{ $ci->name }}</td>
                                        <td>{{ $ci->email }}</td>
                                        <td>
                                            <a class="btn mb-1 btn-sm waves-effect waves-light btn-primary" href="{{ url('admin/system/edit-user/'.$ci->id) }}">
                                                <i class="ti ti-pencil fs-4"></i> 
                                            </a>
                                            <a class="btn mb-1 btn-sm waves-effect waves-light btn-danger" href="javascript:void(0)" onclick="openDeleteModal({{ $ci->id }})">
                                                <i class="ti ti-trash-x fs-4"></i> 
                                            </a>    
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!--Delete Modal-->
    <div id="deleteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Delete Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to delete this admin?</h5>
                    <form method="POST" action="{{ url('admin/system/delete-admin') }}" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="deleteId" id="deleteId">
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Yes">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal -->

    <!--  Mobilenavbar -->
    @include('admin.include.mobnav')

    <!--  Import Js Files -->
    @include('admin.include.footerjs')

    <script>
        function openDeleteModal(id) {
            document.getElementById('deleteId').value = id;
            $('#deleteModal').modal('show');
        }
    </script>
  </body>
</html>
