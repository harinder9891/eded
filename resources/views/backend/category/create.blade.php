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
                        <form method="POST" action={{ url('admin/categories') }}
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-3">Enter Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="category" class="form-control" required value="{{old('category')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-3">Slug (If you leave it blank, it will be generated
                                        automatically.)</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="slug" class="form-control" value="{{old('slug')}}">
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
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image_file">
                                                <label class="custom-file-label image-name">Upload Images</label>
                                            </div>
                                        </div>
                                        <div class="p-2 border mb-4">
                                            <div class="upload-images d-flex">
                                                <div>
                                                    <img src="{{ asset('/common/assets/images/users/male/25.jpg') }}" alt="img" id="set-image" class="w73 h73 border p-0">
                                                </div>
                                                <div class="ml-3 mt-2">
                                                    <h6 class="mb-0 mt-3 font-weight-bold image-name"></h6>
                                                    <small id="image-size"></small>
                                                </div>
                                                <!-- <div class="float-right ml-auto">
                                                    <a href="#"
                                                        class="float-right btn btn-icon btn-danger btn-sm mt-5"><i
                                                            class="fa fa-trash-o"></i></a>
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
                                        <input type="text" name="keywords" class="form-control" value="{{old('keywords')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row ">
                                    <label class="col-sm-3">Description (Meta Tag)</label>
                                    <div class="col-sm-9">
                                        <textarea rows="9" name="description" class="form-control"></textarea>
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
