@extends('backend.layout.app') @section('content')
<!--App-Content-->
<div class="app-content my-3 my-md-5">
    <div class="side-app">
        <!--Page-Header-->
        @if(session('success'))
        <div class="alert alert-dismissible alert-success">
            <button class="close" type="button" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
        @endif @if(session('error'))
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button>
            {{ session('error') }}
        </div>
        @endif @if(count($errors)>0)
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

        <div class="page-header">
            <h1 class="page-title">Edit Team Member Name</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Member Name</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">

                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                          
                            <form action="{{ url('admin/team/'.$teams->id) }}"" method="POST" enctype="multipart/form-data" id="form">
                                @csrf
                                @method('put')
                                <div class="tab-pane active" id="tab1">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Member Name
                                                </label>
                                                <input type="text" class="form-control" placeholder="Member Name" name="member_name" value="{{ $teams->member_name }}" required value="{{old('title')}}" />
                                            </div>
                       
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Designation</label>
                                                <input type="text" class="form-control" name="designation" value="{{ $teams->designation }}" />
                                            </div>
                                           
                                            <div class="form-group multi-image">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Image
                                                    Image</label>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                             <input type="file" class="custom-file-input multi-image-selector"  name="image" />
                                                            <label class="custom-file-label">Upload Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 border mb-4">
                                                        <div class="upload-images d-flex">
                                                            <div class="multi-image-selected">
                                                                <img src="{{ $teams->image??asset('/common/assets/images/users/male/25.jpg') }}"
                                                                    alt="img" class="w73 h73 border p-0 default" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">About Member</label>
                                                <textarea class="content" name="about" id="product_description">{{$teams->about}}</textarea>
                                            </div>
                                           
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection

