@extends('frontend.layouts.master')
@section('content')
<!-- Start Breadcumbs Area -->
<div class="breadcumbs-area bc-area-padding" style="background-image: url('{{URL::asset('frontend/assets/img/about/breadcumbs-bg-1.jpg')}}');">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>About us</h2>
						<span><a href="{{route('/')}}">home</a> / About us</span>
					</div>x
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcumbs Area -->

<!-- Start Top Banner Area -->
        <div class="content-block-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="banner-man-boxed" style="background-image: url('{{URL::asset('frontend/assets/img/about/'.$about->photo)}}');"></div>
{{--                        <div class="banner-man-boxed" style="background-image: url('{{URL::asset('frontend/assets/img/about/2019-07-16-5d2d6fc807b77.png')}}');"></div>--}}
                    </div>
                    <div class="col-md-7">
                        <div class="banner-boxed">
{{--                            <h2>--}}
{{--                             <span>{{'Motor Tracker'}}</span>--}}
{{--                            </h2>--}}
{{--                            <p class="subtitle">{!!'Sub Motor Tracker' !!}</p>--}}
{{--                            <p> {!! 'Our first priority is clients. As they use lots of vehicles they need to manage their fleet, locate them properly, keep their record of route, mileage, average speed, information regarding whether they have reached their destination or not, real time location, etc. for the ease of transport management.' !!}</p>--}}

                            <h2>
                                <span>{{$about->title_en}}</span>
                            </h2>
                            <p class="subtitle">{!!$about->sub_title_en !!}</p>
                            <p> {!! $about->description_en !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Top Banner Area -->
        

         <!-- Start Our Parners Area -->
    <div class="content-block-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2><span>Our  Clients</span></h2>
                        <div class="car-icon"><img src="{{asset('')}}frontend/assets/img/cars.png" alt="car"></div>
                        <p>Our first priority is clients. As they use lots of vehicles they need to manage their fleet, locate them properly, keep their record of route, mileage, average speed, information regarding whether they have reached their destination or not, real time location, etc. for the ease of transport management. </p>
                    </div>
                </div>
            </div>
            <div class="partner-slides">
                @foreach($clients as $key=>$client)
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('frontend/assets/img/client/'.$client->photo)}}" alt="Image Description"></a>
{{--                    <a class="partners-logo" href="#"><img src="{{asset('frontend/assets/img/client/client-3-2019-07-14.png')}}" alt="Image Description"></a>--}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Our Parners Area -->
         
       
        
        
	@endsection
