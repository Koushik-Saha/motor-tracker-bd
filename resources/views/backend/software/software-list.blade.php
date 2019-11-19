@extends('backend.layouts.master')
@section('content')
<div id="main">
	<!-- Page Length Options -->
	<div class="row">
		<div class="col s12">
			<div class="card">
				<div class="card-content">
					<h4 class="card-title center">ALL Software</h4>
					<div class="row">
						<div class="col s12">
							<table id="scroll-dynamic" class="display">
								<thead>
									<tr><th>SL </th>
									<th>User Manual</th>
									<th>Android Link </th>
									<th>Apple Link </th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($softwares as $key=>$software)
								<tr>
									<td>{{$key + 1}}</td>
									<td>
										<a href="frontend/assets/user_manual/{{$software->user_manual}}".><img src="{{asset('backend/app-assets/images/icon/pdf.png')}}" alt="" height="100px" width="100px"></a>
										{{-- {{$software->user_manual}} --}}
									</td>
									<td>
										<a href="{{$software->android_app_link }}"><img src="{{asset('backend/app-assets/images/icon/android.png')}}" alt=""  height="100px" width="100px"></a>
										
									</td>
									<td>
										<a href="{{$software->apple_app_link }}"><img src="{{asset('backend/app-assets/images/icon/apple.png')}}" alt=""  height="100px" width="100px"></a>
									</td>
									<td>
										<a href="{{route('softwareEdit',$software->id)}}">
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