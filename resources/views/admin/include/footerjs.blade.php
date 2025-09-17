<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Simplebar -->
<script src="https://cdn.jsdelivr.net/npm/simplebar@6.2.6/dist/simplebar.min.js"></script>

<!-- Bootstrap 5 Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-UTNP5dzzO4hXv07so7XoH7EtO6n2gOD13uPZ6mz8kM+O/7Cw6Erb6RcfdKc1UOr/6Y3b/IKfWKh5xJ0QecT4FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<!-- ===== Custom App Scripts (convert these into your own Laravel public/js if you still need them) ===== -->
<script src="{{ asset('js/app.min.js') }}"></script>
<script src="{{ asset('js/app.init.js') }}"></script>
<script src="{{ asset('js/app-style-switcher.js') }}"></script>
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/datatable-basic.init.js') }}"></script>
<script src="{{ asset('js/forms/select2.init.js') }}"></script>

<!-- DataTable Initialization -->
<script>
$(document).ready(function() {
    $('#config-table').DataTable();
});
</script>

<!-- CKEditor Initialization -->
<script>
$(document).ready(function() {
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');

    $('form').on('submit', function () {
        for (var instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    });
});
</script>
