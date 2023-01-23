@extends('backend.layout.app')
@section('content')
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
            <h1 class="page-title">Create Review</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Review</li>
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
                        <h3 class="card-title">Create Review</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action={{ url('admin/reviews') }}
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
								<div class="row ">
                                    <label class="form-label text-dark font-weight-semibold fs-16 col-sm-3">Category</label>
                                    <div class="col-sm-9">
										<select class="form-control custom-select" name="category_id">
                                            <option value="">Cateogry</option>
                                            @foreach($category as $cat)
                                            <option value={{$cat->id}}>{{$cat->category}}</option>
                                            @endforeach
                                        </select>
									</div>
								</div>
                            </div>
                
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-3">Enter Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" required value="{{old('title')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-3">Designation</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="designation" class="form-control" value="{{old('designation')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-3">Rating </label>
                                    <div class="col-sm-9">
                                        <input type="number" name="rating" max="5" class="form-control" value="{{old('rating')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row ">
                                    <label class="col-sm-3">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" id="description">{{old('description')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-3">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image_file" class="form-control" value="{{old('rating')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="btn-list mt-4 text-right">
                                <button type="submit" class="btn btn-primary btn-space">Create</button>
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
