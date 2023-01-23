@extends('backend.layout.app') @section('content')
<!--App-Content-->
<div class="app-content my-3 my-md-5">
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
            <h1 class="page-title">Add New Poduct</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
                            <form action="{{ url('/admin/products') }}" method="POST" enctype="multipart/form-data" id="form">
                                @csrf
                                <div class="tab-pane active" id="tab1">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product Name
                                                </label>
                                                <input type="text" class="form-control" placeholder="Product Title" name="product_title" required value="{{old('product_title')}}" />
                                            </div>
                                            <div class="form-group multi-image">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product
                                                    Image</label>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input multi-image-selector" name="product_image" required />
                                                            <label class="custom-file-label">Upload Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 border mb-4">
                                                        <div class="upload-images d-flex">
                                                            <div class="multi-image-selected">
                                                                <img src="{{ asset('/common/assets/images/users/male/25.jpg') }}" alt="img" class="w73 h73 border p-0 default" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Price</label>
                                                <input type="number" class="form-control" name="price" value="{{old('price')}}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product
                                                    Description</label>
                                                <textarea class="content" name="product_description" id="product_description">{{old('product_description')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product
                                                    Details</label>
                                                <textarea class="content" name="product_details" id="product_details">{{old('product_details')}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane" id="tab2">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Title
                                                    (Meta Tag)</label>
                                                <input type="text" class="form-control" placeholder="Title (Meta Tag)" name="seo_title" value="{{old('seo_title')}}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Summary &
                                                    Description (Meta Tag)</label>
                                                <input type="text" class="form-control" placeholder="Summary & Description (Meta Tag)" name="summary" value="{{old('summary')}}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Keywords
                                                    (Meta Tag)</label>
                                                <input type="text" class="form-control" placeholder="Keywords (Meta Tag)" name="keywords" value="{{old('keywords')}}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Slug (If
                                                    you leave it blank, it will be generated automatically.)</label>
                                                <input type="text" class="form-control" placeholder="Slug" name="slug" value="{{old('slug')}}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Extra SEO
                                                    Field (Header Section)</label>
                                                <textarea rows="9" class="form-control" name="extra_seo" value="{{old('extra_seo')}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </form>
                        </div>

                        <!-- <ul class="list-inline wizard mb-0 mt-4">
                                <li class="previous list-inline-item" ><a href="#"
                                        class="btn btn-secondary mb-0" id="previous">Previous</a></li>
                                <li class="next list-inline-item float-right"><a href="#"
                                        class="btn btn-primary mb-0" id="continue">Continue</a></li>
                            </ul> -->

                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection