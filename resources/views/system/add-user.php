<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->include('admin/include/head.php'); ?>
  </head>
  <body>
    
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
        <?php echo $this->include('admin/include/sidebar.php'); ?>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        <?php echo $this->include('admin/include/header.php'); ?>
        <!--  Header End -->
        <div class="container-fluid">
            <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Add New Admin</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted " href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></li>
                      <li class="breadcrumb-item" aria-current="page">Add New Admin</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  
                </div>
              </div>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php echo $this->include('admin/include/flash.php'); ?>
                    


                    <form method="POST" action="<?php echo base_url('admin/system/create-user') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                        <div class="row">    
                        <div class="col-lg-12">
                            <div class="mb-3 form-group">
                              <label class="form-label">Name <span class="text-danger">*</span></label>
                              <div class="controls">
                                <input name="username" id="username" value="<?= old('username') ?>" required="" class="form-control" aria-invalid="true">
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3 form-group">
                              <label class="form-label">Email <span class="text-danger">*</span></label>
                              <div class="controls">
                                <input name="email" id="email" required="" value="<?= old('email') ?>"  class="form-control" aria-invalid="true">
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3 form-group">
                              <label class="form-label">Password <span class="text-danger">*</span></label>
                              <div class="controls">
                                <input name="password" id="password" required="" value="<?= old('password') ?>"  class="form-control" aria-invalid="true">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <label></label>
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
    
    <!--  Mobilenavbar -->
    <?php echo $this->include('admin/include/mobnav.php'); ?>
    <!--  Import Js Files -->
    <?php echo $this->include('admin/include/footerjs.php'); ?>

  </body>
</html>