@extends('backend.layout.app')
@section('content')
<!--App-Content-->
<div class="app-content  my-3 my-md-5">
	<div class="side-app">
		@if (session('success'))
		<div class="alert alert-dismissible alert-success">
			<button class="close" type="button" data-dismiss="alert">×</button>
			{{ session('success') }}
		</div>
		@endif
		@if (session('error'))
		<div class="alert alert-dismissible alert-danger">
			<button class="close" type="button" data-dismiss="alert">×</button>
			{{ session('error') }}
		</div>
		@endif
		@if (count($errors)>0)
		<div class="alert alert-dismissible alert-danger">
			<button class="close" type="button" data-dismiss="alert">×</button>
			@foreach($errors->all() as $error)
			<ul>
				<li>
					{{ $error }}
				</li>
			</ul>
			@endforeach
		</div>

		@endif

		<!--Page-Header-->
		<div class="page-header">
			<h1 class="page-title">Reviews</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Reviews</li>
			</ol>
		</div>
		<!--/Page-Header-->



		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="text-wrap mt-6">
					<div class="">
						<div class="btn-list text-center">
							<a href={{url('admin/reviews/create')}} class="btn btn-primary waves-effect waves-light">Add New reviews</a>
						</div>
						<div class="col-lg-12 col-md-12">
							<form class="form-inline float-right mb-4">
								<div class="nav-search ">
									<input type="search" class="form-control" placeholder="Search reviews…" aria-label="Search">
									<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Latest User Details -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Reviews</h3>
					</div>
					<div class="card-body">
						<div class="ads-tabs">
							<div class="tabs-menus">
								<!-- Tabs -->
								<ul class="nav panel-tabs">
									<li><a href="#" data-toggle="" id="delete-all">Delete Selected</a></li>
								</ul>
							</div>
						</div>
						<div class="table-responsive border-top">
							<table class="table table-bordered table-hover mb-0 text-nowrap display nowrap" id="table">
								<thead>
									<tr>
										<th><input type="checkbox" class='checkall' id='checkall' value="review"></th>
										<th>Cateogry</th>
										<th>Title</th>
										<th>Desination</th>
										<th>Image</th>
										<th>Description</th>
										<!-- <th>Status</th> -->
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
									@foreach($reviews as $review)
									<tr>
										<td><input type="checkbox" class='check' id='check' value="{{$review->id}}"></td>
										<td>{{$review->category->category}}</td>
										<td>{{$review->title}}</td>
										<td>{{$review->designation}}</td>
										<td>
											<div class="d-flex">
												<img class="avatar avatar-md  d-block brround cover-image mr-3" src="{{url($review->image)}}">
											</div>
										</td>
										<td>{!! $review->description !!}</td>
										<!-- <td>{{ $review->status == 0 ? "Inactive":"Active"}}</td> -->
										<td>
											<a href={{ url('/admin/reviews/'.$review->id.'/edit')}} class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>


											<!-- <a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> -->

											<form method="post" action={{ url('/admin/reviews/'.$review->id)}}>
												@csrf
												@method('delete')
												<button type="submit" class="btn btn-danger btn-sm text-white warning" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
											</form>
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
		<!-- Latest User Details -->
	</div>
</div>
</div>
@endsection