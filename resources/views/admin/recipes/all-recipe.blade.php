<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.include.head')
</head>
<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      
        <!-- Sidebar -->
        @include('admin.include.sidebar')

        <!-- Main Wrapper -->
        <div class="body-wrapper">

            <!-- Header -->
            @include('admin.include.header')

            <div class="container-fluid">
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">All Recipes</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a class="text-muted" href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Recipes</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-3">
                                <div class="text-center">  
                                    <a href="{{ url('admin/recipes/create') }}" class="btn btn-primary">Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recipes Table -->
                <div class="card">
                    <div class="card-body">

                        @include('admin.include.flash')

                        <div class="table-responsive mt-3">
                            <table id="config-table" class="table border display table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sr = 0; @endphp
                                    @foreach($recipes as $recipe)
                                        @php $sr++; @endphp
                                        <tr>
                                            <td>{{ $sr }}</td>
                                            <td>{{ $recipe->title }}</td>
                                            <td>{{ $recipe->type ?? '-' }}</td>
                                            <td>{{ $recipe->description }}</td>
                                            <td>
                                                @if(!empty($recipe->image))
                                                    <img src="{{ asset('uploads/recipes/'.$recipe->image) }}" alt="{{ $recipe->title }}" width="100" class="img-thumbnail">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($recipe->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                              <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-sm btn-primary">
                                                <i class="ti ti-pencil fs-4"></i>
                                            </a>
                                            
                                                <a class="btn btn-sm btn-danger" href="javascript:void(0)" onclick="openDeleteModal({{ $recipe->id }})">
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

    <!-- Delete Modal -->
    <div id="deleteModal" class="modal fade" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Recipe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to delete this recipe?</h5>
                    <form method="POST" action="{{ url('admin/recipes/delete') }}">
                        @csrf
                        <input type="hidden" name="deleteId" id="deleteId">
                        <div class="form-group text-center mt-3">
                            <input type="submit" class="btn btn-primary" value="Yes">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navbar -->
    @include('admin.include.mobnav')

    <!-- JS Files -->
    @include('admin.include.footerjs')

    <script>
        function openDeleteModal(id) {
            document.getElementById('deleteId').value = id;
            $('#deleteModal').modal('show');
        }
    </script>
</body>
</html>
