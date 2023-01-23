@extends('backend.layout.app')
@section('content')
<div class="app-content  my-3 my-md-5">
					<div class="side-app">

						<!--Page-Header-->
						<div class="page-header">
							<h1 class="page-title">Create Category</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Create Category</li>
							</ol>
						</div>
						<!--/Page-Header-->

						<!-- Create Category -->
						
						<div class="row">
							<div class="col-md-12 col-lg-2 col-xl-2">
								
							</div>
							<div class="col-lg-2 col-xl-8 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Create Category</h3>
									</div>
									<div class="card-body">
										<form method="POST" action={{url('admin/categories/'.$category->id)}} enctype="multipart/form-data">
										@csrf
                                        @method('put')
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-3">Enter Category Name</label>
													<div class="col-sm-9">
														<input type="text" name="category" class="form-control" required value="{{$category->category}}">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-3">Slug (If you leave it blank, it will be generated automatically.)</label>
													<div class="col-sm-9">
														<input type="text" name="slug" class="form-control" value="{{ $category->slug }}">
													</div>
												</div>
											</div>
											
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label mt-2">Category Image</label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="image" name="image_file">
																<label class="custom-file-label image-name">Upload Images</label>
															</div>
														</div>
														<div class="p-2 border mb-4">
															<div class="upload-images d-flex">
																<div>
																	<img src ={{$category->image}} alt="img" id="set-image" class="w73 h73 border p-0">
																</div>
																<div class="ml-3 mt-2">
																	<h6 class="mb-0 mt-3 font-weight-bold image-name"></h6>
																	<small id="image-size"></small>
																</div>
																<!-- <div class="float-right ml-auto">
																	<a href="#" class="float-right btn btn-icon btn-danger btn-sm mt-5"><i class="fa fa-trash-o"></i></a>
																</div> -->
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-3">Keywords (Meta Tag) </label>
													<div class="col-sm-9">
														<input type="text" name="keywords" class="form-control" value="{{$category->keywords}}">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row ">
													<label class="col-sm-3">Description (Meta Tag)</label>
													<div class="col-sm-9">
														<textarea rows="9" name="description" class="form-control">{{ $category->description}}</textarea>
													</div>
												</div>
											</div>
											<div class="form-group">
											<div class="row ">
                                                <label class="form-label text-dark font-weight-semibold fs-16 col-sm-3">Status</label>
                                                <div class="col-sm-9">
												<select class="form-control custom-select" name="status">
                                                    <option value="">Status</option>
                                                    <option value="0" {{ $category->status == 0 ? "selected":"" }}> Inactive</option>
                                                    <option value="1" {{ $category->status == 1 ? "selected":"" }}> Active</option>
                                                </select>
												</div>
											</div>
                                            </div>
                                        
											<div class="btn-list mt-4 text-right">
												<button type="submit" class="btn btn-primary btn-space">Update</button>
												<button type="button" class="btn btn-secondary btn-space">Reset</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-2 col-xl-2">
								
							</div>
					</div>
					<!-- Create Category -->
				</div>
			</div>
@endsection