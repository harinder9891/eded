
<!DOCTYPE html>
<html lang="en">
    <!--Head Links-->
    @include('frontend.layout.head-links')
    <body>
                <!-- Sidebar menu-->
                @include('frontend.layout.header')
                <div class="site-content section-block">

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Our Story Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="our-story-block ptb-100">
            <div class="container">
                <!-- Title Row -->
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mock-up-thumb md-mrb-50">
                            <img src="{{asset('common/assets/images/about/about5.png')}}" alt="story Mock" />
                        </div><!-- /.mock-up-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="section-title style-one">
                            <h2 class="title-main">Our Story<span class="divider"></span></h2><!-- /.title-main -->
                        </div>
                        <div class="story-content">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                            <div class="btn-group-default">
                                <a href="#0" class="btn btn-default">OUR STORY</a>
                                <a href="#0" class="btn btn-default btn-primary">FIND OUR STORES</a>
                            </div>
                        </div><!-- /.story-content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end our story block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Food Menu Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="food-menu-block home-foodmenu-one bg-image ptb-100"
            style="background-image:url('common/assets/images/bg/bg-pattent1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title style-one text-center">
                            <h2 class="title-main">Special Menu<span class="divider"></span></h2><!-- /.title-main -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="foodmenu_carousel_three owl-carousel carousel-nav-text carousel-align-center">
                        @foreach($course as $product)
                            <div class="food-grid-item grid-style-two">
                                <div class="food-thumb">
                                    <img src="{{ url($product->course_image) }}" alt="Food">
                                </div>
                                <div class="food-info">
                                    <h3 class="food-title"><a href="{{url('products/'.$product->slug)}}">{{$product->course_title}}</a></h3>
                                    <!-- <div class="reciepe-no">14 Reciepes</div> -->
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end food menu block ~~-->


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
                            @foreach($categoriesWithCourses as $category)
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
                            {{$categoriesWithCourses->links()}}

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
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Promo Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="promo-block ptb-100 bg-image bg-parallax1"
            style="background-image:url('common/assets/images/bg/promo-bg3.jpg')">
            <div class="element-group">
                <div class="element one">
                    <img src="{{asset('common/assets/images/element/element2.2.png')}}" alt="Element">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="promo-content text-white text-center">
                            <h2 class="promo-title">We Create Sweet Memories</h2><!-- /.promo-title -->
                            <h4 class="promo-subtitle">the best restaurant in the city</h4><!-- /.promo-title -->
                            <div class="video-btn-area">
                                <a href="https://player.vimeo.com/video/192089758" class="video-btn video-popup">
                                    <span class="icon-play3"></span>
                                </a>
                                <span class="text">restaurant intro</span>
                            </div>
                        </div><!-- /.promo-content-->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end promo block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Chef Reviews Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="chef-reviews-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="reviews-content-area ptb-100">
                            <div class="section-title style-one">
                                <h2 class="title-main">Food's Masters Reviews<span class="divider"></span></h2>
                                <!-- /.title-main -->
                            </div>
                            <div class="chef-reviews-carousel owl-carousel">
                                <div class="reviews-content">
                                    <div class="chef-info">
                                        <a href="#" class="client-name">AARON SCOTT</a> - ITALIAN CHEF MASTER
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                </div><!-- /.reviews-content -->
                                <div class="reviews-content">
                                    <div class="chef-info">
                                        <a href="#" class="client-name">AARON SCOTT</a> - ITALIAN CHEF MASTER
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                </div><!-- /.reviews-content -->
                            </div>
                        </div>
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="chef-thumb">
                            <img src="{{asset('common/assets/images/others/chefreview.png')}}" alt="Chef Mock" />
                        </div><!-- /.chef-block -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end chef reviews block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start News Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="news-block style-one ptb-100 bg-image"
            style="background-image:url('common/assets/images/bg/bg-pattent1.jpg')">
            <div class="container ml-b-60">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-9">
                        <div class="section-title style-one">
                            <h2 class="title-main">News & Tips<span class="divider"></span></h2><!-- /.title-main -->
                        </div>
                    </div><!-- /.col-lg-9 -->
                    <div class="col-lg-3">
                        <div class="carousel-nav-text top-60 nav-right">
                            <button class="btn-links btn-prev">
                                <span>prev</span>
                            </button>
                            <button class="btn-links btn-next">
                                <span>next</span>
                            </button>
                        </div>
                        <!--~./ end carousel nav text ~-->
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="blog-post-carousel owl-carousel">
                            <article class="post post-gird">
                                <figure class="post-thumb">
                                    <a href="blog-single.html">
                                        <img src="{{asset('common/assets/images/blog/post/grid/1.jpg')}}" alt="Blog Image" />
                                    </a>
                                </figure><!-- /.post-thumb -->
                                <div class="post-details">
                                    <div class="entry-meta-content">
                                        <div class="entry-cat">
                                            <a href="#0">events</a>
                                        </div>
                                        <!--./ entry-date -->
                                        <div class="entry-date">
                                            <span>March 2020</span>
                                        </div>
                                        <!--./ entry-date -->
                                    </div>
                                    <!--./ entry-meta-content -->
                                    <h2 class="entry-title"><a href="blog-single.html">The benefits of Buffalo Meat</a>
                                    </h2><!-- /.entry-title -->
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod tempor
                                            incidi labore et dolore and agna aliqua espana.</p>
                                    </div>
                                </div><!-- /.post-details -->
                            </article><!-- /.post -->
                            <article class="post post-gird">
                                <figure class="post-thumb">
                                    <a href="blog-single.html">
                                        <img src="{{asset('common/assets/images/blog/post/grid/2.jpg')}}" alt="Blog Image" />
                                    </a>
                                </figure><!-- /.post-thumb -->
                                <div class="post-details">
                                    <div class="entry-meta-content">
                                        <div class="entry-cat">
                                            <a href="#0">events</a>
                                        </div>
                                        <!--./ entry-date -->
                                        <div class="entry-date">
                                            <span>March 2020</span>
                                        </div>
                                        <!--./ entry-date -->
                                    </div>
                                    <!--./ entry-meta-content -->
                                    <h2 class="entry-title"><a href="blog-single.html">Nuts may be tiny</a></h2>
                                    <!-- /.entry-title -->
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod tempor
                                            incidi labore et dolore and agna aliqua espana.</p>
                                    </div>
                                </div><!-- /.post-details -->
                            </article><!-- /.post -->
                            <article class="post post-gird">
                                <figure class="post-thumb">
                                    <a href="blog-single.html">
                                        <img src="{{asset('common/assets/images/blog/post/grid/1.jpg')}}" alt="Blog Image" />
                                    </a>
                                </figure><!-- /.post-thumb -->
                                <div class="post-details">
                                    <div class="entry-meta-content">
                                        <div class="entry-cat">
                                            <a href="#0">events</a>
                                        </div>
                                        <!--./ entry-date -->
                                        <div class="entry-date">
                                            <span>March 2020</span>
                                        </div>
                                        <!--./ entry-date -->
                                    </div>
                                    <!--./ entry-meta-content -->
                                    <h2 class="entry-title"><a href="blog-single.html">Herbs that naturally detox</a>
                                    </h2><!-- /.entry-title -->
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod tempor
                                            incidi labore et dolore and agna aliqua espana.</p>
                                    </div>
                                </div><!-- /.post-details -->
                            </article><!-- /.post -->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end news block ~~-->



    </div>
                @include('frontend.layout.footer')
        <!--Foot Links-->
        @include('frontend.layout.foot-links')
    </body>
</html>

