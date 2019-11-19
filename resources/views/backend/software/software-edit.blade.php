@extends('backend.layouts.master')
@section('content')
<div id="main">
	<div class="row">
		{{-- <div class="col s12 m12 l12" > --}}
			<div class="col s12 m8 l8 offset-m1 xl7 offset-xl3" >
				<div id="validation" class="card card card-default scrollspy">
					<div class="card-content">
						<h4 class="card-title center">Update Software</h4>
						{{-- <form method="POST" action="{{route('productStore')}}" class="col s12" enctype="multipart/form-data"> --}}
							<form class="col s12" method="POST" action="{{route('softwareUpdate')}}" enctype="multipart/form-data" >
								@csrf

								<input type="hidden" id="id" name="id" value="{{$software->id}}">
								<div class="row">
									<div class="input-field col s12">
									<div class="file-field input-field">
										<div class="btn">
											<span>User Manual</span>
											<input type="file" name="user_manual" multiple>
										</div>
										<div class="file-path-wrapper">
											<input for="user_manual" class="file-path validate" name="user_manual" type="text" value="{{$software->user_manual}}" placeholder="Upload User Manual">
										</div>
									</div>
								</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">phone_iphone</i>
										<input id="apple_app_link" type="text" value="{{$software->apple_app_link}}" name="apple_app_link">
										<span class="text-danger" style="color:red;">{{ $errors->has('apple_app_link') ? $errors->first('apple_app_link'):'' }}</span>
										<label for="apple_app_link" class="">Apple App Link</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">android</i>
										<input id="android_app_link"  value="{{$software->android_app_link}}" type="text" name="android_app_link" >
										<span class="text-danger" style="color:red;">{{ $errors->has('android_app_link') ? $errors->first('android_app_link'):'' }}</span>
										<label for="android_app_link" class="">Android App Link</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12  center">
										<button class="btn cyan waves-effect waves-light" type="submit">Update
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