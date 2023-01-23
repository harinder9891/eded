@extends('frontend.layout.app')
@section('content')

<div class="site-content section-block">
        <!--~~~ Sticky Header ~~~-->
        <div id="sticky-header"></div>
        <!--~./ end sticky header ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Page Title Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('common/assets/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Products</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>
                            <!--~~./ breadcrumb-area ~~-->
                        </div>
                        <!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div>
            <!--~~./ end container ~~-->
        </div>
        <!--~~./ end page title area ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Food Menu Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="food-menu-block ptb-100 bg-image" style="background-image:url('common/assets/images/bg/bg-pattent3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-foodmenu-tab style-three">
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach($categories as $category)
                                <li>
                                    <a data-toggle="tab" href="#foodmenu{{$category->id}}" role="tab">{{$category->category}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--~./ end filter foodmenu tab ~-->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content filter-foodmenu-tab-content">
                            <!--~~~~~ Start Tab Pane ~~~~~-->
                            @foreach($categories as $category)
                            <div class="tab-pane fade active show" id="foodmenu{{$category->id}}" role="tabpanel"
                                data-animate="hg-fadeInUp">
                                <div class="row">
                                @foreach($category->course as $product)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="food-grid-item grid-style-three">
                                            <div class="food-thumb">
                                                <img src="{{ url($product->course_image) }}" alt="Food">
                                                <div class="overlay">
                                                    <div class="food-cart-tools">
                                                        <a href="{{url('products/'.$product->slug)}}" class="food-cart btn btn-default">View details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-info">
                                                <h3 class="food-title"><a href="{{url('products/'.$product->slug)}}">{{$product->course_title}}</a>
                                                </h3>
                                                <div class="food-price">{{$product->price}}<sup>Rs/-</sup></div>
                                            </div>
                                        </div>
                                        <!--~./ food-menu-item ~-->
                                    </div>
                                @endforeach
                                </div><!-- /.row -->
                            </div>
                            @endforeach
                            <!--~./ end tab pane ~-->


                        </div>
                    </div>
                </div>
                <!-- pagination code  -->
                <div class="row">
                    <div class="col-12">
                        <nav class="paging-navigation pagination-center pd-t-45">
                            <ul class="nav-links">
                            {{$categories->links()}}

                                <!-- <li class="nav-previous">
                                    <a href="#">Previous</a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#" class="page-numbers">2</a></li>
                                <li><a href="#" class="page-numbers">3</a></li>
                                <li><a href="#" class="page-numbers">4</a></li>
                                <li class="nav-next">
                                    <a href="#">Next</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div><!-- /.container -->
        </div>
        <!--~~./ end pricing block ~~-->

</div>

        @endsection
