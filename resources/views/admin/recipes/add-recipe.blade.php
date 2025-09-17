<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.include.head')
  </head>
  <body>
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

      <!-- Sidebar -->
      @include('admin.include.sidebar')

      <div class="body-wrapper">
        <!-- Header -->
        @include('admin.include.header')

        <div class="container-fluid">
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Add Recipe</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted" href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Add Recipe</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              @include('admin.include.flash')

              <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
            
                    <div class="col-lg-6">
                        <div class="mb-3 form-group">
                            <label class="form-label">Recipe Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        </div>
                    </div>
            
                    <div class="col-lg-6">
                        <div class="mb-3 form-group">
                            <label class="form-label">Recipe Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3 form-group">
                          <label class="form-label">Recipe Category <span class="text-danger">*</span></label>
                          <select name="type" class="form-control" required>
                              <option value="">-- Select Category --</option>
                              @php
                                  $types = ['Chicken','Vegetarian','Sea Food','Dessert','Beef'];
                              @endphp
                              @foreach($types as $type)
                                  <option value="{{ $type }}" {{ old('type', $recipe->type ?? '') == $type ? 'selected' : '' }}>{{ $type }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  
            
                    <div class="col-lg-6">
                        <div class="mb-3 form-group">
                            <label class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea name="description" rows="2" class="form-control" required>{{ old('description') }}</textarea>
                        </div>
                    </div>
            
                    <div class="col-lg-12">
                        <div class="mb-3 form-group">
                            <label class="form-label">Recipe Content</label>
                            <textarea name="recipe" rows="6" class="form-control" required>{{ old('recipe') }}</textarea>
                        </div>
                    </div>
            
                    <div class="col-lg-6">
                        <div class="mb-3 form-group">
                            <label class="form-label">Video Link <span class="text-danger">*</span></label>
                            <input type="url" name="video_link" value="{{ old('video_link') }}" class="form-control">
                        </div>
                    </div>
            
                    <!-- ✅ Status Toggle -->
                    <div class="col-lg-6">
                        <div class="mb-3 form-group">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control" required>
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
            
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            
                </div>
            </form>
            
            

            </div>
          </div>
        </div>
      </div>
    </div>

    @include('admin.include.mobnav')
    @include('admin.include.footerjs')
  </body>
</html>
