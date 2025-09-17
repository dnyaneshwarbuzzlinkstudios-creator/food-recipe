<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
      <div class="brand-logo d-flex align-items-center justify-content-center">
          <a href="{{ url('/') }}" class="text-nowrap logo-img">
              <img src="{{ asset('front/assets/images/log1.webp') }}" class="dark-logo" width="140" alt="" />
              <img src="{{ asset('front/assets/images/logo1.webp') }}" class="light-logo" width="140" alt="" />
          </a>
          <hr>
          <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8 text-muted"></i>
          </div>
      </div>

      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
              
              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ url('admin/dashboard') }}" aria-expanded="false">
                      <span><i class="ti ti-aperture"></i></span>
                      <span class="hide-menu">Dashboard</span>
                  </a>
              </li>

             
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('recipes.index') }}" aria-expanded="false">
                    <span><i class="ti ti-building-cottage"></i></span>
                    <span class="hide-menu">Recipes</span>
                </a>
            </li>
            

             

              <li class="sidebar-item">
                  <a class="sidebar-link has-arrow" href="javascript:void()" aria-expanded="false">
                      <span class="d-flex"><i class="ti ti-accessible"></i></span>
                      <span class="hide-menu">System</span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                          <a href="{{ url('admin/system/users') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Admin</span>
                          </a>
                      </li>
                  </ul>
              </li>

              <li class="sidebar-item mt-5 mb-5">
                  <!-- Extra space or footer items -->
              </li>
          </ul>
      </nav>

      <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
          <div class="hstack gap-3">
              <div class="john-img">
                  <img src="{{ asset('back/dist/images/profile/user-1.jpg') }}" class="rounded-circle" width="40" height="40" alt="">
              </div>
              <div class="john-title">
                  <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                  <span class="fs-2 text-dark">Designer</span>
              </div>
              <button class="border-0 bg-transparent text-primary ms-auto" type="button" aria-label="logout" onclick="window.location='{{ url('admin/logout') }}'">
                  <i class="ti ti-power fs-6"></i>
              </button>
          </div>
      </div>  

      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
