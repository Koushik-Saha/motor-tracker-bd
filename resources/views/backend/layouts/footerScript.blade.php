{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}


<script src="{{asset('')}}backend/app-assets/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('')}}backend/app-assets/vendors/chartjs/chart.min.js"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{asset('')}}backend/app-assets/js/plugins.js" type="text/javascript"></script>
<script src="{{asset('')}}backend/app-assets/js/custom/custom-script.js" type="text/javascript"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('')}}backend/app-assets/js/scripts/dashboard-ecommerce.js" type="text/javascript"></script>
<!-- Data Table JS-->
<script src="{{asset('')}}backend/app-assets/vendors/data-tables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{asset('')}}backend/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="{{asset('')}}backend/app-assets/vendors/data-tables/js/dataTables.select.min.js" type="text/javascript"></script>
<script src="{{asset('')}}backend/app-assets/js/scripts/data-tables.js" type="text/javascript"></script>

<script src="{{asset('')}}backend/app-assets/js/toastr.min.js" type="text/javascript"></script>

@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
toastr.error('{{ $error }}');
</script>
@endforeach
@endif
{!! Toastr::message() !!}

