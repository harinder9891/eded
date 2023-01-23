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
            <h1 class="page-title">Edit Product</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                            <form action="{{ url('admin/products/'.$id) }}" method="POST" enctype="multipart/form-data" id="form">
                                @csrf
                                @method('put')
                                <div class="tab-pane active" id="tab1">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product Name
                                                    </label>
                                                <input type="text" class="form-control" placeholder="Course Title"
                                                    name="product_title" required value="{{ $courseById->course_title }}"/>
                                            </div>
                                            <div class="form-group multi-image">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product
                                                    Image</label>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                class="custom-file-input multi-image-selector"
                                                                name="product_image" />
                                                            <label class="custom-file-label">Upload Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 border mb-4">
                                                        <div class="upload-images d-flex">
                                                            <div class="multi-image-selected">
                                                                <img src="{{ $courseById->course_image??asset('/common/assets/images/users/male/25.jpg') }}"
                                                                    alt="img" class="w73 h73 border p-0 default" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group multi-image">
                                            <label class="form-label text-dark font-weight-semibold fs-16">Slider
                                                Images</label>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input type="file"
                                                            class="custom-file-input multi-image-selector"
                                                            name="slider_image[]" multiple />
                                                        <label class="custom-file-label">Upload Images</label>
                                                    </div>
                                                </div>
                                                <div class="p-2 border mb-4">
                                                    <div class="upload-images d-flex">
                                                        <div class="multi-image-selected">
                                                        @foreach($courseById->course_sliders as $slider)
                                                            <img src="{{ $slider->image??asset('/common/assets/images/users/male/25.jpg') }}"
                                                                alt="img" class="w73 h73 border p-0 default" />
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Availability</label>
                                                <select class="form-control custom-select" name="availability">
                                                    <option value="">Is in stock?</option>
                                                        <option value="1" {{$courseById->availability == '1'?'Selected':''}}>Yes</option>
                                                        <option value="0" {{$courseById->availability == '0'?'Selected':''}}>No</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    class="form-label text-dark font-weight-semibold fs-16">Ratings</label>
                                                <input type="number" class="form-control" name="ratings" max='5' value="{{ $courseById->ratings }}"/>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    class="form-label text-dark font-weight-semibold fs-16">Price</label>
                                                <input type="number" class="form-control" name="price" value="{{ $courseById->price }}"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product
                                                    Description</label>
                                                <textarea class="content" name="product_description" id="product_description">{{ $courseById->course_description }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Product
                                                    Details</label>
                                                <textarea class="content" name="product_details" id="product_details">{{ $courseById->course_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label
                                                    class="form-label text-dark font-weight-semibold fs-16">Category</label>
                                                <select class="form-control custom-select" name="category_id">
                                                    <option value="">Select Category</option>
                                                    @foreach($category as $cat)
                                                        <option value={{ $cat->id }} {{ $courseById->category_id == $cat->id ? "selected":"" }}>{{ $cat->category }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">May You like
                                                    Products</label>
                                                <select class="multi-select" style="width: 100% !important;"
                                                    data-placeholder="Choose Products" multiple name="related_classes[]">
                                                    @foreach($course as $cou)
                                                        <option value={{ $cou->id }} {{ in_array($cou->id,$relatedClasses) ? 'selected':'' }}>{{ $cou->course_title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Title (Meta Tag)</label>
                                                <input type="text" class="form-control" placeholder="Title (Meta Tag)" name="seo_title" value="{{ $courseById->seo_title }}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Summary & Description (Meta Tag)</label>
                                                <input type="text" class="form-control" placeholder="Summary & Description (Meta Tag)" name="summary" value="{{ $courseById->summary }}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Keywords (Meta Tag)</label>
                                                <input type="text" class="form-control" placeholder="Keywords (Meta Tag)" name="keywords" value="{{ $courseById->keywords }}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Slug (If you leave it blank, it will be generated automatically.)</label>
                                                <input type="text" class="form-control" placeholder="Slug" name="slug" value="{{ $courseById->slug }}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Extra SEO Field (Header Section)</label>
                                                <textarea rows="9" class="form-control" name="extra_seo">{{ $courseById->extra_seo }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection

