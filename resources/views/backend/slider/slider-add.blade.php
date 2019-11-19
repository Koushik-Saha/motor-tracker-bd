@extends('backend.layouts.master')
@section('content')
<div id="main">
	<div class="row">
		{{-- <div class="col s12 m12 l12" > --}}
			<div class="col s12 m8 l8 offset-m1 xl7 offset-xl3" >
				<div id="validation" class="card card card-default scrollspy">
					<div class="card-content">
						<h4 class="card-title center">Add Slider</h4>
						{{-- <form method="POST" action="{{route('productStore')}}" class="col s12" enctype="multipart/form-data"> --}}
							<form class="col s12" method="POST" action="{{route('sliderStore')}}" enctype="multipart/form-data" >
								@csrf

								
								<div class="row">
									<div class="input-field col s12">
									<div class="file-field input-field">
										<div class="btn">
											<span>Photo</span>
											<input type="file" name="photo" multiple>
										</div>
										<div class="file-path-wrapper">
											<input for="photo" class="file-path validate" name="photo " type="text" placeholder="Upload Photo">
											<span class="text-danger" style="color:red;">{{ $errors->has('photo') ? $errors->first('photo'):'' }}</span>
										</div>
									</div>
								</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">title</i>
										<input id="apple_app_link" type="text" name="title_en">
										<span class="text-danger" style="color:red;">{{ $errors->has('title_en') ? $errors->first('title_en'):'' }}</span>
										<label for="title_en" class="">Title</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">subtitles</i>
										<input id="apple_app_link" type="text" name="sub_title_en">
										<span class="text-danger" style="color:red;">{{ $errors->has('sub_title_en') ? $errors->first('sub_title_en'):'' }}</span>
										<label for="sub_title_en" class="">Sub Title</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12  center">
										<button class="btn cyan waves-effect waves-light" type="submit">Add
										<i class="material-icons right">send</i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection