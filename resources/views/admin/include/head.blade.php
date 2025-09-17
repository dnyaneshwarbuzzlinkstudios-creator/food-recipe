<!--  Title -->
<title>{{ $metatitle }} | The Legal Savvy</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="handheldfriendly" content="true" />
<meta name="MobileOptimized" content="width" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="keywords" content="hostels near me" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery (already included in your code) -->
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!--  Favicon -->
<link rel="shortcut icon" type="image/png" href="{{ asset('public/front/assets/images/favicon.ico') }}" />

<!-- Core Css -->
<link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css') }}" />
<link rel="stylesheet" href="{{ asset('dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
<link rel="stylesheet" href="{{ asset('dist/libs/select2/dist/css/select2.min.css') }}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('dist/default.css') }}" />


<style>
	.text-right
	{
		text-align:right !important;
	}
	.filtercolmn {
	background: #49beff17 !important;
	padding: 15px;
	box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
	margin-bottom: 30px;
	}
	
	.fw600 {
		font-weight: 600 !important;
	}
	
	.bg-warning-soft {
		background: #ffc10710 !important;
	}
	
	.body-wrapper>.container-fluid {
		max-width: 1300px;
	}
	/*.table-responsive {*/
		/*overflow-x: clip !important;*/
	/*    overflow-y: clip !important;*/
	/*    -webkit-overflow-scrolling: touch;*/
	/*}*/
	div.dataTables_wrapper div.dataTables_paginate {
		margin-bottom: 22px;
	}
	
	.brand-logo {
		border-bottom: 1px solid #ebeaea;
		margin-bottom: 5px;
	}
	
	.select2-container--default .select2-selection--multiple .select2-selection__choice {
		background-color: #ebf3fe;
		color: black;
	}
	
	.select2-container--default.select2-container--focus .select2-selection--multiple {
		border: solid #e4e9f2 1px;
		outline: 0;
	}
	.bg-light-primary{
		background-color: #FFE6DB!important;
	}
	.bg-light-info{
		background-color: #FFE6DB!important;
	}
	.fw600 {
		font-weight: 600;
	}
	.sidebar-item .sidebar-link:hover {
	  background-color: #FFE6DB!important;
	  color: #FF6B33!important;
	}
	
	
	.sidebar-nav ul .sidebar-item .sidebar-link {
		color: #000000;
	}
	
	table {
		white-space: nowrap;
	}
	
	 /* Basic Pagination Styles End*/
	.table {
		--bs-table-color-type: initial;
		--bs-table-bg-type: initial;
		--bs-table-color-state: initial;
		--bs-table-bg-state: initial;
		--bs-table-color: #000000;
		--bs-table-bg: var(--bs-body-bg);
		--bs-table-border-color: #ebf1f6;
		--bs-table-accent-bg: transparent;
		--bs-table-striped-color: var(--bs-body-color);
		--bs-table-striped-bg: #EAEFF4;
		--bs-table-active-color: var(--bs-body-color);
		--bs-table-active-bg: rgba(0, 0, 0, 0.1);
		--bs-table-hover-color: var(--bs-body-color);
		--bs-table-hover-bg: #F6F9FC;
		width: 100%;
		margin-bottom: 1rem;
		vertical-align: top;
		border-color: var(--bs-table-border-color);
	}
	
	.sidebar-nav ul .sidebar-item.selected>.sidebar-link, .sidebar-nav ul .sidebar-item.selected>.sidebar-link.active, .sidebar-nav ul .sidebar-item>.sidebar-link.active {
		background-color: #FF4800;
		color: #fff;
	}
	
	.btn-primary {
		background-color: #FF4800;
		border-color: #FF4800;
	}
	
	.table-responsive .dataTables_wrapper .dataTables_paginate .paginate_button {
		cursor: pointer;
	}
	
	tr.sticky-head {
		background-color: #FFE6DB !important;
		position: sticky;
		top: 0;
		z-index: 2;
	}
	
	.sticky-head th {
		background-color: #FFE6DB !important;
	}
	
	.sticky-name {
		position: sticky;
		left: 0;
		z-index: 1;
	}
	
	th.sticky-name {
		z-index: 3;
	}
	
	td.sticky-name {
		background-color: #FFE6DB !important;
	}
	
	.table-container {
		width: 100%;
		overflow: scroll;
		max-height: 500px;
		position: relative;
	}
	.btn-danger {
		--bs-btn-color: #fff;
		--bs-btn-bg: #ff2b2b;
		--bs-btn-border-color: #ff2b2b;
		--bs-btn-hover-color: #fff;
		--bs-btn-hover-bg: #c93333;
		--bs-btn-hover-border-color: #c86e56;
		--bs-btn-focus-shadow-rgb: 251,155,129;
		--bs-btn-active-color: #fff;
		--bs-btn-active-bg: #c93333;
		--bs-btn-active-border-color: #bc6750;
		--bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
		--bs-btn-disabled-color: #fff;
		--bs-btn-disabled-bg: #ff2b2b;
		--bs-btn-disabled-border-color: #ff2b2b;
	}
	.body-wrapper>.container-fluid{
		max-width: 100%!important;
	}
	
	.useravtar
	{
		width: 35px;
		height: 35px;
		border-radius: 50%;
		color: white;
		display: flex;
		align-items: center;
		justify-content: center;
		font-weight: bold;
		font-size: 14px;
		text-transform: uppercase;
	}
	.form-control {
	   border:var(--bs-border-width) solid #9d9d9d !important;
	}
	.card {
		margin-bottom: 30px;
		box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
	}
	p {
		margin-top: 0;
		margin-bottom: 1rem;
		font-size: 16px;
		color: black;
	}
	.badge{
		font-size: 12px;
		font-weight: 600;
	}    
	.cke_notifications_area {
			pointer-events: none;
			display: none;
		}
		.table-responsive .dataTables_wrapper .dataTables_length select {
    padding-top: .25rem;
    padding-bottom: .25rem;
    padding-left: -0.5rem;
    padding-right: 1.523rem;
    font-size: 0.765625rem;
    border-radius: 5px;
    border-color: #dfe5ef;
}
</style>
