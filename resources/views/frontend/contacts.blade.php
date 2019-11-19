@extends('frontend.layouts.master')
@section('content')
<!-- Start Breadcumbs Area -->
<div class="breadcumbs-area bc-area-padding" style="background-image: url('{{URL::asset('frontend/assets/img/breadcumbs-bg-2.jpg')}}');">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>Contact us</h2>
						<span><a href="{{route('/')}}">home</a> / Contact us</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcumbs Area -->


<!-- Google Map Area -->
<div style="position:relative;padding-top:56.25%;">
  <iframe src="https://maps.google.com/maps?q=Technosis%20Technology&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen
    style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
</div>
<!-- Google Map Area -->








<!-- Google Map Area -->
{{-- <div id="map"></div> --}}
{{-- <div class="content-block-area"> --}}
	{{-- <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div style="margin:0px;padding:0px;overflow:hidden">
					
					<iframe width="100%" height="470px" src="https://maps.google.com/maps?q=Pirerbag%2C%20Amtola%2C%20Mirpur-2%2C%20Dhaka-1216&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
				</div>
			
				</div>
			</div>
		</div> --}}
	{{-- </div> --}}
	<!-- Google Map Area -->
	@endsection