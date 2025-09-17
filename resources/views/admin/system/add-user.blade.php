<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.include.head')
</head>
<body>
    
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        
        <!-- Sidebar Start -->
        @include('admin.include.sidebar')
        <!-- Sidebar End -->

        <!-- Main wrapper -->
        <div class="body-wrapper">
            
            <!-- Header Start -->
            @include('admin.include.header')
            <!-- Header End -->

            <div class="container-fluid">
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">Add New Admin</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a class="text-muted" href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Add New Admin</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-3">
                                <!-- Empty column -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        @include('admin.include.flash')

                        <form method="POST" action="{{ url('admin/system/create-user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                                <div class="controls">
                                                    <input name="username" id="username" value="{{ old('username') }}" required class="form-control" aria-invalid="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                                <div class="controls">
                                                    <input name="email" id="email" value="{{ old('email') }}" required class="form-control" aria-invalid="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                                <div class="controls">
                                                    <input name="password" id="password" value="{{ old('password') }}" required class="form-control" aria-invalid="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <input type="submit" class="btn btn-primary" value="Save">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <!-- Mobile navbar -->
    @include('admin.include.mobnav')

    <!-- Import Js Files -->
    @include('admin.include.footerjs')

</body>
</html>
