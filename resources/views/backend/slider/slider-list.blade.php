@extends('backend.layouts.master')
@section('content')
<div id="main">
	<!-- Page Length Options -->
	<div class="row">
		<div class="col s12">
			<div class="card">
				<div class="card-content">
					<h4 class="card-title center">Slider Page</h4>
					{{-- <form method="POST" action="{{route('productStore')}}" class="col s12" enctype="multipart/form-data"> --}}
						{{-- <form method="POST" action="{{route('productStore')}}" class="col s12" enctype="multipart/form-data"> --}}
							<div class="row">
								<div class="col s12">
									<table id="scroll-dynamic" class="display">
										<thead>
											<a href="{{route('sliderAdd')}}" class="waves-effect waves-red pink btn-large right mb-1">
												<i class="material-icons left">addc</i>Add
											</a>
											<tr><th>SL </th>
											<th>Title</th>
											<th>Photo </th>
											<th>Subtitle</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										{{-- {{dd ($abouts)}} --}}
										@foreach($sliders as $key=>$slider)
										<tr>
											<td>{{$key + 1}}</td>
											<td>{{$slider->title_en}}</td>
											<td>
												<img src="{{asset('frontend/assets/img/slider/'.$slider->photo)}}" alt="" height="100px" width="100">
											</td>
											<td>{!!$slider->sub_title_en !!}</td>
											
											<td>
												{{-- <a href="{{route('aboutEdit',$about->id)}}"> --}}
													
													{{-- <a href="" title="edit"  class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
														<i class="material-icons">edit</i>
													</a> --}}
													<a href="{{route('sliderDestroy',$slider->id)}}" title="delete"  class="mb-6 btn-floating waves-effect waves-light red accent-2">
														<i class="material-icons">delete_forever</i>
													</a>
												</td>
											</tr>
											@endforeach
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection