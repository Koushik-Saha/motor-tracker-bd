@extends('backend.layouts.master')
@section('content')
<div id="main">
	<div class="row">
{{-- <div class="col s12 m12 l12" > --}}
<div class="col s12 m8 l8 offset-m1 xl7 offset-xl3" >
						<div id="validation" class="card card card-default scrollspy">
							<div class="card-content">
								<h4 class="card-title center">Add A Service</h4>
								{{-- <form method="POST" action="{{route('productStore')}}" class="col s12" enctype="multipart/form-data"> --}}
								<form class="col s12" method="POST" action="{{route('servicesStore')}}" enctype="multipart/form-data" >
								@csrf
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">account_circle</i>
											<input id="title" type="text" name="title">
											<span class="text-danger" style="color:red;">{{ $errors->has('title') ? $errors->first('title'):'' }}</span>

											<label for="name3" class="">Title</label>
										</div>
									</div>
									{{-- <div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">local_phone</i>
											<input id="sub_title" type="text" name="sub_title" >
											<span class="text-danger" style="color:red;">{{ $errors->has('sub_title') ? $errors->first('sub_title'):'' }}</span>
											<label for="sub_title" class="">Sub Title</label>
										</div>
									</div> --}}
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">location_on</i>
											<input id="description" type="text" name="description">
											<span class="text-danger" style="color:red;" >{{ $errors->has('description') ? $errors->first('description'):'' }}</span>
											<label for="description" class="">Description</label>
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
@endsection