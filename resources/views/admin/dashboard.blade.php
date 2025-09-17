<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.include.head')
</head>
<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        
        <!-- Sidebar Start -->
      @include('admin.include.sidebar')
        <!-- Sidebar End -->

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            
            <!-- Header Start -->
            @include('admin.include.header')
            <!-- Header End -->

            <div class="container-fluid">
                <!-- Owl carousel -->
                <div class="row">

                    <!-- Total Clients (Case In Progress) -->
                    {{-- <div class="col-lg-3">
                        <div class="card border-0 zoom-in bg-light-primary shadow-none">
                            <div class="card-body">
                                <div class="text-center">
                                    <img width="80" height="80" src="https://img.icons8.com/?size=100&id=E9xSZj6pKYjG&format=png&color=000000" alt="conference-call"/>
                                    <p class="fw-semibold fs-5 text-black mb-1">Total Active Clients </p>
                                    <h5 class="fw-semibold text-black mb-0">42</h5>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Total Monthly Fees -->
                    {{-- <div class="col-lg-3">
                        <div class="card border-0 zoom-in bg-light-primary shadow-none">
                            <div class="card-body">
                                <div class="text-center">
                                    <img width="80" height="80" src="https://img.icons8.com/?size=100&id=YagodtnP71eo&format=png&color=000000" alt="money-bag"/>
                                    <p class="fw-semibold fs-5 text-black mb-1">Total Monthly Fees </p>
                                    <h5 class="fw-semibold text-black mb-0">12345</h5>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- PHP-generated month name -->
                    @php $monthName = date('F'); @endphp

                    <!-- Total Paid -->
                    {{-- <div class="col-lg-3">
                        <div class="card border-0 zoom-in bg-light-primary shadow-none">
                            <div class="card-body">
                                <div class="text-center">
                                    <img width="80" height="80" src="https://img.icons8.com/?size=100&id=JQX2fDPyQq4E&format=png&color=000000" alt="money-bag"/>
                                    <p class="fw-semibold fs-5 text-black mb-1">Total Paid ({{ $monthName }})</p>
                                    <h5 class="fw-semibold text-black mb-0">10000</h5>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Total Expenses (add more cards if needed) -->

                </div>
            </div>
        </div>
    </div>

    <!-- Mobile navbar -->
    @include('admin.include.mobnav')

    <!-- Import Js Files -->
    @include('admin.include.footerjs')
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
