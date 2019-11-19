@extends('backend.layouts.master')
@section('content')
<div id="main">
	<!-- Page Length Options -->
	<div class="row">
		<div class="col s12">
			<div class="card">
				<div class="card-content">
					<h4 class="card-title center">ALL Client</h4>
					<div class="row">
						<div class="col s12">
							{{-- <p>
								<a class="mb-6 btn btn-small right waves-effect waves-light gradient-45deg-purple-deep-orange"> button</a>
							</p> --}}
							{{-- <table id="data-table-simple" class="display"> --}}
								<table id="scroll-dynamic" class="display">
									<thead>
										<a href="{{route('servicesAdd')}}" class="waves-effect waves-red pink btn-large right mb-1">
											<i class="material-icons left">addc</i>Add
										</a>
										<tr>
											{{-- <p>
												<a class="btn btn-small right waves-effect waves-light gradient-45deg-purple-deep-orange"> button</a>
											</p> --}}
											<th>SL </th>
											<th>Title </th>
											<th>photo </th>
											<th>Subtitle</th>
											<th>Description</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($services as $key=>$service)
										<tr>
											<td>{{$key + 1}}</td>
											<td>{{$service->title}}</td>
											{{-- <td>{{$service->photo}}</td> --}}
											<td><img src="{{asset('frontend/assets/img/services/'.$service->photo)}}" alt="" height="50px" width="100"></td>
											<td>{{$service->sub_title}}</td>
											<td>{{$service->description}}</td>
											<td>
												{{-- <a class="btn-floating mb-1 btn-medium waves-effect waves-light red">
													<i class="material-icons">delete</i>
												</a> --}}

												<form id="delete-form-{{ $service->id }}" action="{{route('servicesDestroy',$service->id)}}" style="display: none;" method="POST">
												@csrf
												</form>
												<button type="button" title="Delete" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
												event.preventDefault();
												document.getElementById('delete-form-{{ $service->id }}').submit();
												}else {
												event.preventDefault();
												}"><i class="material-icons">delete</i></button>
											</td>
										</tr>
										@endforeach
									</tbody>
									{{--  <tfoot>
									<tr>
										
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
									</tr>
									</tfoot> --}}
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
@endsection