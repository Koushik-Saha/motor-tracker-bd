@extends('frontend.layouts.master')
@section('content')

<!-- Start Homepage Slider -->
<div class="homepage-slides-wrapper">
    <!-- Slider main container -->
    <div class="swiper-container swiper1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            {{-- {{dd($sliders)}} --}}
            @foreach($sliders as $slider)
            <div class="swiper-slide" style="background-image: url('{{URL::asset('frontend/assets/img/slider/'.$slider->photo)}}');">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <h1>{{$slider->title_en}}</h1>
                                    <p>{{$slider->sub_title_en}}</p>
                                    {{-- <a class="btn theme-btn" href="appointment.html">make an appointment</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Start Services Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                             @foreach ($services as $service)
                    <div class="col-sm-6 col-md-4">
                        <div class="services-item-two">
                            <div class="services-item-mask">
                                <div class="pic">
                                    <img src="{{asset('frontend/assets/img/services/'.$service->photo)}}" alt="Image">
                                    {{-- <ul class="single-links">
                                        <li><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                            <div class="services-item-info">
                                <h3 class="title">{{$service->title}}</h3>
                                {{-- <span class="post">Lorem Ipsum</span> --}}
                                <p class="description">
                                    {{$service->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                            @endforeach
            </div>
            
        </div>
        <!-- End Services Area -->


<!-- Start Services Area -->
{{-- <div class="content-block-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <h2><span>Services & Features</span></h2>
                    <div class="car-icon"><img src="{{asset('')}}frontend/assets/img/cars.png" alt="car"></div>
                    <p>MotoTracker GPS Tracker’s intuitive, full-featured solutions help businesses better manage their drivers and vehicles by extracting accurate and actionable intelligence from real-time location and historical trips report.</p>
                </div>
            </div>
        </div>
        <div class="row">

             @foreach ($services as $service)
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="services-item-two">
                    <div class="services-item-mask">
                        <div class="pic">
                            <img src="{{asset('frontend/assets/img/services/'.$service->photo)}}" alt="Image">
                        </div>
                    </div>
                    <div class="services-item-info">
                        <h3 class="title">{{$service->title}}</h3>
                        <p class="description">
                            {{$service->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        
            </div>
        </div>
    </div> --}}
    <!-- End Services Area -->
    
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
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Our Parners Area -->
    
    @endsection