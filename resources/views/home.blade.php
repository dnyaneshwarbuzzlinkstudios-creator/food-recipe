
@include('include.header')
    <!-- Extra Section to Enable Scrolling -->
    <div class="hero-content">
      <h1 class="main-heading">Food Recipes</h1>
      <p class="sub-heading"><span>Delicious Home-Cooked Meals Made Easy</span></p>
      <button class="view-recipes-btn">View Recipes</button>
    </div>
  </div>
</div>
        <div class="container-fluid" style="background: #ffffff;border-radius: 0.5em 0.5em 0px 0px;">
            <!-- Section Title -->
            <div class="row ">
                <div class="col-12 text-center justify-content-center align-items-center">
                    <h1 class="wf-section-title" >Weekly Favorites</h1>
                </div>
            </div>

            <div class="row mb-4 justify-content-center">
                <!-- Search Box -->
                <div class="col-lg-3 col-md-6 col-12 mb-2 mb-md-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search recipes...">
                        <span class="input-group-text bg-white">
                            <!-- Search Icon (Bootstrap Icon) -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 
                                    1.415-1.414l-3.85-3.85zm-5.242.656a5 5 0 1 
                                    1 0-10 5 5 0 0 1 0 10z"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Category Dropdown -->
                <div class="col-lg-3 col-md-4 col-12">
                    <select class="form-select">
                        <option selected disabled>Select Category</option>
                        <option value="chicken">Chicken</option>
                        <option value="beef">Beef</option>
                        <option value="seafood">Seafood</option>
                        <option value="vegetarian">Vegetarian</option>
                        <option value="dessert">Dessert</option>
                    </select>
                </div>
            </div>

            
            <!-- Recipe Cards -->
            <div class="row g-4 mb-3 sidepadding">
                <!-- Bacon-Wrapped Chicken -->
    <!-- Bacon-Wrapped Chicken -->
                <div class="col-lg-4 col-md-6">
                    <div class="wf-recipe-card h-100 d-flex flex-column">
                        <div class="wf-recipe-image">
                            <img src="{{ asset('images/img3.jpeg') }}" alt="Bacon-Wrapped Chicken" class="img-fluid">
                        </div>
                        <div class="wf-recipe-content text-center">
                            <h3 class="wf-recipe-title">Bacon-Wrapped Chicken</h3>
                            <p class="wf-recipe-description">Crispy on the outside, juicy on the inside</p>
                        </div>
                    </div>
                </div>

                <!-- Grilled Ribeye Steak -->
                <div class="col-lg-4 col-md-6">
                    <div class="wf-recipe-card h-100 d-flex flex-column">
                        <div class="wf-recipe-image">
                            <img src="{{ asset('images/img2.jpeg') }}" alt="Grilled Ribeye Steak" class="img-fluid">
                        </div>
                        <div class="wf-recipe-content  text-center">
                            <h3 class="wf-recipe-title">Grilled Ribeye Steak</h3>
                            <p class="wf-recipe-description">Flavor that goes beyond the bone</p>
                        </div>
                    </div>
                </div>

                <!-- Salmon Poke Bowl -->
                <div class="col-lg-4 col-md-6">
                    <div class="wf-recipe-card h-100 d-flex flex-column">
                        <div class="wf-recipe-image">
                            <img src="{{ asset('images/img1.jpeg') }}" alt="Salmon Poke Bowl" class="img-fluid">
                        </div>
                        <div class="wf-recipe-content  text-center">
                            <h3 class="wf-recipe-title">Salmon Poke Bowl</h3>
                            <p class="wf-recipe-description">Light, refreshing, and bursting with taste</p>
                        </div>
                    </div>
                </div>
            </div>

            @include('include.footer')
           