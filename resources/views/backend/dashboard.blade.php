@extends('backend.layouts.master')
@section('content')
<div id="main">
	<div class="row">
		<div class="col s12">
			<div class="container">
				<!--card stats start-->
				{{-- <div id="card-stats">
					<div class="row">
						<div class="col s12 m6 l6 xl3">
							<div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
								<div class="padding-4">
									<div class="col s7 m7">
										<i class="material-icons background-round mt-5">add_shopping_cart</i>
										<p>Orders</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text">690</h5>
										<p class="no-margin">New</p>
										<p>6,00,00</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l6 xl3">
							<div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
								<div class="padding-4">
									<div class="col s7 m7">
										<i class="material-icons background-round mt-5">perm_identity</i>
										<p>Clients</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text">1885</h5>
										<p class="no-margin">New</p>
										<p>1,12,900</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l6 xl3">
							<div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
								<div class="padding-4">
									<div class="col s7 m7">
										<i class="material-icons background-round mt-5">timeline</i>
										<p>Sales</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text">80%</h5>
										<p class="no-margin">Growth</p>
										<p>3,42,230</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l6 xl3">
							<div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
								<div class="padding-4">
									<div class="col s7 m7">
										<i class="material-icons background-round mt-5">attach_money</i>
										<p>Profit</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text">$890</h5>
										<p class="no-margin">Today</p>
										<p>$25,000</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!--card stats end-->
				<!-- ecommerce offers start-->
				<div id="ecommerce-offer">
					<div class="row">
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/apple-watch.png" class="width-40 border-round z-depth-5"
									alt="" class="responsive-img" />
									<h5 class="white-text lighten-4">{{$totalslider}}</h5>
									<p class="white-text lighten-4">Total Slider</p>
								</div>
							</div>
						</div>
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/printer.png" class="width-40 border-round z-depth-5" alt=""
									class="responsive-img" />
									<h5 class="white-text lighten-4">{{$totalclient}}</h5>
									<p class="white-text lighten-4">Total Client</p>
								</div>
							</div>
						</div>
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/laptop.png" class="width-40 border-round z-depth-5" alt=""
									class="responsive-img" />
									<h5 class="white-text lighten-4">{{$totalservice}}</h5>
									<p class="white-text lighten-4">Total Service</p>
								</div>
							</div>
						</div>
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/bowling.png" class="width-40 border-round z-depth-5" alt=""
									class="responsive-img" />
									<h5 class="white-text lighten-4">{{$totalpackage}}</h5>
									<p class="white-text lighten-4">Total Package</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ecommerce offers end-->
				<!-- //////////////////////////////////////////////////////////////////////////// -->
			</div>
		</div>
	</div>
</div>

@endsection