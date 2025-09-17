<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Include your head partial --}}
    @include('admin.include.head')
</head>
<body>
    <!-- Preloader -->
   
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" 
         data-layout="vertical" 
         data-sidebartype="full"
         data-sidebar-position="fixed" 
         data-header-position="fixed">

        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{ url('/') }}" class="text-nowrap logo-img text-center d-block mb-2 w-100">
                                    <img src="{{ asset('front/assets/images/logo.webp') }}" width="170" alt="">
                                </a>
                                
                                <form method="POST" id="loginForm" action="{{ url('admin/login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <input type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" value="Sign In">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer Scripts --}}
    @include('admin.include.footerjs')

    <script>
        $('form#loginForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            let urls = form.attr('action');

            $.ajax({
                url: urls,
                type: "POST",
                data: form.serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.status == 1) {
                        $('form#loginForm')[0].reset();
                        toastr.success(data.msg);

                        setTimeout(function() {
                            window.location.href = '{{ url("admin/dashboard") }}';
                        }, 1000);

                    } else {
                        toastr.error(data.msg);
                    }
                }
            });
        });
    </script>
</body>
</html>
