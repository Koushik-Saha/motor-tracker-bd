@extends('backend.layouts.master')
@section('content')
<div id="main">
	<div class="row">
{{-- <div class="col s12 m12 l12" > --}}
<div class="col s12 m8 l8 offset-m1 xl7 offset-xl3" >
						<div id="validation" class="card card card-default scrollspy">
							<div class="card-content">
								<h4 class="card-title center">Add Package</h4>
								{{-- <form method="POST" action="{{route('productStore')}}" class="col s12" enctype="multipart/form-data"> --}}
								<form class="col s12" method="POST" action="{{route('packageStore')}}" enctype="multipart/form-data" >
								@csrf
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">subtitles</i>
											<input id="title" type="text" name="title">
											<span class="text-danger" style="color:red;">{{ $errors->has('title') ? $errors->first('title'):'' }}</span>

											<label for="name3" class="">Title</label>
										</div>
									</div>
									{{-- <div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">subtitles</i>
											<input id="sub_title" type="text" name="sub_title" >
											<span class="text-danger" style="color:red;">{{ $errors->has('sub_title') ? $errors->first('sub_title'):'' }}</span>
											<label for="sub_title" class="">Sub Title</label>
										</div>
									</div> --}}
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">attach_money</i>
											<input id="price" type="text" name="price" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" >
											<span class="text-danger" style="color:red;">{{ $errors->has('price') ? $errors->first('price'):'' }}</span>
											<label for="price" class="">Price</label>
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12 panel-body">
											{{-- <i class="material-icons prefix">description</i> --}}
											<strong>Description</strong>
											<br>
											<br>
											{{-- <input id="description" type="text" name="description"> --}}
											<textarea  name="description" class="materialize-textarea" data-length="120"></textarea>
											<span class="text-danger" style="color:red;" >{{ $errors->has('description') ? $errors->first('description'):'' }}</span>
										</div>
									</div>

									{{-- <div class="row">
					                    <div class="input-field col s12">
					                      <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
					                      <label for="textarea1">Textarea</label>
					                    </div>
					                  </div> --}}

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