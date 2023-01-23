@extends('backend.layout.app')

@section('content')

<div class="app-content my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</div>

						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Total Team</h3>
										<div class="card-options"> <a class="btn btn-sm btn-primary" href="{{url('admin/teams')}}">View</a> </div>
									</div>
									<div class="card-body ">
										<h2 class="text-dark  mt-0 font-weight-bold">45</h2>
										<!-- <div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-primary w-75" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-up text-green mr-1"></i>10% than last year</div> -->
									</div>
								</div>
							</div>
							<div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Total Product</h3>
										<div class="card-options"> <a class="btn btn-sm btn-secondary" href="{{url('admin/products')}}">View</a> </div>
									</div>
									<div class="card-body ">
										<h2 class="text-dark  mt-0 font-weight-bold">{{$products}}</h2>
										<!-- <div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-secondary w-45" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-down text-danger mr-1"></i>12% than last year</div> -->
									</div>
								</div>
							</div>
							<!-- <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Total Enquiry</h3>
										<div class="card-options"> <a class="btn btn-sm btn-warning" href="#">View</a> </div>
									</div>
									<div class="card-body ">
										<h2 class="text-dark  mt-0 font-weight-bold">3,517</h2>
										<div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-warning w-50" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-down text-danger mr-1"></i>5% than last year</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Total Courses</h3>
										<div class="card-options"> <a class="btn btn-sm btn-info" href="#">View</a> </div>
									</div>
									<div class="card-body ">
										<h2 class="text-dark  mt-0  font-weight-bold">1,759</h2>
										<div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-info w-25" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-up text-success mr-1"></i>15% than last year</div>
									</div>
								</div>
							</div> -->
						</div>

						<!-- <div class="row row-deck">
							<div class="col-xl-6 col-lg-6 col-md-12">
								<div class="card shadow">
									<div class="card-header">
										<h3 class="card-title">Enquiry Overview</h3>
									</div>
									<div class="card-body">
										<canvas id="survey" class="dropshadow"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Earnings/Cost</div>
									</div>
									<div class="card-body overflow-hidden">
										<canvas id="lineChart1" class="dropshadow h-350"></canvas>
									</div>
								</div>
							</div>
						</div> -->

						<!-- Latest User Details -->
						<!-- <div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Latest Enquiry Details</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive border-top">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th>ID</th>
														<th>Student Name</th>
														<th>Email ID</th>
														<th>Phone Number</th>
														<th>Course Type</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>01</td>
														<td>Vanessa</td>
														<td>abc@gmail.com</td>
														<td>+91 8010911256</td>
														<td>Cloud Computing</td>
														<td>
															<a class="btn btn-success btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View">View Details</a>
														</td>
													</tr>
													<tr>
														<td>02</td>
														<td>Rutherford</td>
														<td>abc@gmail.com</td>
														<td>+91 8010911256</td>
														<td>AWS</td>
														<td>
															<a class="btn btn-success btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View">View Details</a>
														</td>
													</tr>
													<tr>
														<td>03</td>
														<td>Elizabeth</td>
														<td>abc@gmail.com</td>
														<td>+91 8010911256</td>
														<td>Cloud Computing</td>
														<td>
															<a class="btn btn-success btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View">View Details</a>
														</td>
													</tr>
													<tr>
														<td>04</td>
														<td>Anthony</td>
														<td>abc@gmail.com</td>
														<td>+91 8010911256</td>
														<td>Linux</td>
														<td>
															<a class="btn btn-success btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View">View Details</a>
														</td>
													</tr>
													<tr>
														<td>05</td>
														<td>Lambert</td>
														<td>abc@gmail.com</td>
														<td>+91 8010911256</td>
														<td>Linux</td>
														<td>
															<a class="btn btn-success btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View">View Details</a>
														</td>
													</tr>
													<tr>
														<td>06</td>
														<td>Lilly</td>
														<td>abc@gmail.com</td>
														<td>+91 8010911256</td>
														<td>Offline</td>
														<td>
															<a class="btn btn-success btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View">View Details</a>
														</td>
													</tr>
													<tr>
														<td>07</td>
														<td>Marry cott</td>
														<td>abc@gmail.com</td>
														<td>+91 8010911256</td>
														<td>Linux</td>
														<td>
															<a class="btn btn-success btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View">View Details</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- Latest User Details -->
					</div>
				</div>

@endsection
