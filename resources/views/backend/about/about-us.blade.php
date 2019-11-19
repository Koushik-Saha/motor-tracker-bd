@extends('backend.layouts.master')
@section('content')
<div id="main">
	<!-- Page Length Options -->
	<div class="row">
		<div class="col s12">
			<div class="card">
				<div class="card-content">
					<h4 class="card-title center">About Page</h4>
					<div class="row">
						<div class="col s12">
							<table id="scroll-dynamic" class="display">
								<thead>
									<tr><th>SL </th>
									<th>Title</th>
									<th>Photo </th>
									<th>Subtitle</th>
									<th>Description </th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								{{-- {{dd ($abouts)}} --}}
								@foreach($abouts as $key=>$about)
								<tr>
									<td>{{$key + 1}}</td>
									<td>{{$about->title_en }}</td>
									<td>
										<img src="{{asset('frontend/assets/img/about/'.$about->photo)}}" alt="" height="100px" width="100"></td>
									<td>{!!$about->sub_title_en !!}</td>
									<td>{!!$about->description_en !!}</td>
									
									<td>
										<a href="{{route('aboutEdit',$about->id)}}">
											<button type="button" title="Edit" class="btn btn-danger btn-sm">
											<i class="material-icons">edit</i>
											</button>
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