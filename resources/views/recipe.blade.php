@include('include.header')
<style>
    .main-nav {
        margin-bottom: 2.5rem;
        margin-top: 0.5rem;
    }
    .main-content {
        display: contents;
    }


    /* Disable hover/focus color for all recipe tabs */
    .recipe-tab-link:hover,
    .recipe-tab-link:focus {
        color: #000000 !important;      /* keeps black color */
    }
    
    /* Ensure full width for all containers */
    .recipe-hero-section, .recipe-main-section {
        width: 100% !important;
        max-width: 100% !important;
    }
    
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
    
    /* Full width tab content */
    #recipe-tabs-content, #recipe-navigation-tabs {
        width: 100%;
    }
    
    /* Ensure tab content takes full width */
    .tab-content {
        width: 100%;
    }
    
    /* Full width rows */
    .tab-pane .row {
        margin-left: 0;
        margin-right: 0;
        width: 100%;
    }
    
    /* Responsive adjustments */
    @media (min-width: 992px) {
        .col-lg-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
    
    @media (min-width: 768px) and (max-width: 991px) {
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
</style>

<!-- Hero Section -->
<section class="recipe-hero-section" id="recipe-hero-main">
    <div class="container-fluid">
        <h1 class="recipe-hero-main-title" id="recipe-main-heading">Unleash Your Inner Chef!</h1>
        <p class="recipe-hero-subtitle" id="recipe-main-subtitle">Simple ingredients, amazing results!</p>
    </div>
</section>

<!-- Recipe Section -->
<section class="recipe-main-section" id="recipe-content-area">
    <div class="container-fluid" id="recipe1">
        <!-- Navigation Tabs -->
        <ul class="nav recipe-category-tabs" id="recipe-navigation-tabs" role="tablist">
            @php
                // Define the order of tabs
                $tabOrder = ['Chicken', 'Vegetarian', 'Sea Food', 'Dessert', 'Beef'];
            @endphp
            
            @foreach($tabOrder as $index => $type)
                <li class="nav-item" role="presentation">
                    <button class="nav-link recipe-tab-link {{ $index === 0 ? 'active' : '' }}" 
                            id="recipe-{{ Str::slug($type) }}-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#recipe-{{ Str::slug($type) }}-section" 
                            type="button" role="tab">
                        {{ $type }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="recipe-tabs-content">
            @foreach($tabOrder as $index => $type)
                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                     id="recipe-{{ Str::slug($type) }}-section" role="tabpanel">
                    <div class="row">
                        @if(isset($recipesByType[$type]) && count($recipesByType[$type]) > 0)
                            @foreach($recipesByType[$type] as $recipe)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="recipe-video-card h-100" id="{{ Str::slug($recipe->title) }}-card">
                                        <div class="recipe-video-wrapper">
                                            <img src="{{ asset('uploads/recipes/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="recipe-video-thumbnail w-100">
                                            <button class="recipe-video-play-btn" data-video="{{ $recipe->id }}">▶</button>
                                        </div>
                                        <div class="recipe-card-content">
                                            <h3 class="recipe-video-title">{{ $recipe->title }}</h3>
                                            <p class="recipe-video-description">{{ $recipe->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 text-center py-5">
                                <p class="lead">No {{ $type }} recipes available at the moment.</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('include.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll('.recipe-video-play-btn').forEach(button => {
        button.addEventListener('click', function() {
            const recipeId = this.getAttribute('data-video');
            // Open in a new tab
            window.open(`/recipe/${recipeId}`, '_blank');
            // '_blank' ensures a new browser tab
        });
    });
    </script>
    
    