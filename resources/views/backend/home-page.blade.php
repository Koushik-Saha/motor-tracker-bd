@extends('backend.layouts.master')
@section('content')
<div id="main">
	{{-- <div class="row">
		<div class="col s12">
			<div class="container">
				HOME PAGE
			</div>
		</div>
	</div> --}}
	<div class="row">
		{{-- <div class="col s12 m8 offset-m1 xl7 offset-xl1"> --}}
			<div class="col s12 m8 l8 offset-m1 xl7 offset-xl3">
				<div id="introduction" class="section scrollspy">
					<ul class="tabs tab-demo z-depth-1" style="text-align: center;">
						<li class="tab"><a href="#test16" class="active">Slider</a></li>
						<li class="tab"><a href="#test18" class="">Services</a></li>
						<li class="tab"><a href="#test19" class="">Our Clients</a></li>
						{{-- <li class="indicator" style="left: 0px; right: 501px;"></li> --}}
					</ul>
					<div id="test16" class="col s12 active" style="display: block;">
						<p>Test 1</p>
					</div>
					<div id="test18" class="col s12" style="display: none;">
						<p>Test 3</p>
					</div>
					{{-- <div id="test19" class="col s12" style="display: none;">
						<p>Test 4</p>
					</div> --}}
					<div class="col s12 m12 l12" id="test19" style="display: none;">
						<div id="validation" class="card card card-default scrollspy">
							<div class="card-content">
								<h4 class="card-title center">Add A Client</h4>
								{{-- <form method="POST" action="{{route('productStore')}}" class="col s12" enctype="multipart/form-data"> --}}
								<form class="col s12" method="POST" action="{{route('clientStore')}}" enctype="multipart/form-data" >
								@csrf
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">account_circle</i>
											<input id="name3" type="text" name="name">
											<span class="text-danger" style="color:red;">{{ $errors->has('name') ? $errors->first('name'):'' }}</span>

											<label for="name3" class="">Name</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">local_phone</i>
											<input id="phone" type="text" name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" >
											<span class="text-danger" style="color:red;">{{ $errors->has('phone') ? $errors->first('phone'):'' }}</span>
											<label for="phone" class="">Phone</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">location_on</i>
											<input id="address" type="text" name="address">
											<span class="text-danger" style="color:red;" >{{ $errors->has('address') ? $errors->first('address'):'' }}</span>
											<label for="address" class="">Address</label>
										</div>
									</div>
									<div class="row">
										{{-- <div class="col m12 s12 file-field input-field"> --}}
											<div style="float: right;" class="col m11 s12 file-field input-field">
											<div class="btn float-right">
												<span>Photo</span>
												<input type="file" style="margin-left: 3rem;" name="photo">
											</div>
											<div class="file-path-wrapper" >
												<input for="photo" class="file-path validate" >


											</div>
											<span class="text-danger" style="color:red; margin-left: 3%">{{ $errors->has('photo') ? $errors->first('photo'):'' }}</span>
										</div>
									</div>
									<div class="row">
											<div class="input-field col s12  center">
												<button class="btn cyan waves-effect waves-light" type="submit">ADD
												<i class="material-icons right">send</i>
												</button>
											</div>
										</div>
									
									{{-- <div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">question_answer</i>
											<textarea id="message3" class="materialize-textarea"></textarea>
											<label for="message3">Message</label>
										</div>
										<div class="row">
											<div class="input-field col s12">
												<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
												<i class="material-icons right">send</i>
												</button>
											</div>
										</div>
									</div> --}}
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	@endsection