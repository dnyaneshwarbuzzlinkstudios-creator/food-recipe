<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
  <nav class="sidebar-nav scroll-sidebar">
      <div class="offcanvas-header justify-content-between">
          <img src="{{ asset('dist/images/logos/favicon.ico') }}" alt="" class="img-fluid">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar>
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
                  <!-- Optional empty space -->
              </li>

          </ul>
      </div>
  </nav>
</div>
