  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header class="site-header default-header-style header-absolute intro-element">
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="intro-socail-share">
                                <div class="share-alt"><span class="fa fa-share-alt"></span></div>
                                <div class="socail-share">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>

                                </div>
                            </div><!-- /.intro-socail-share -->
                        </div>
                        <div class="col-4">
                            <div class="site-branding">
                                <a href="{{url('/')}}">
                                    <img src="{{('/common/assets/images/logo/bavari.png')}}" alt="Site Logo" />
                                </a>
                            </div><!-- /.site-branding -->
                        </div>
                        <div class="col-4">
                            <div class="header-right-area">
                                <div class="intro-content-info"><span>Free Call:</span> 8130550124</div>



                                <div class="hamburger-menus">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div><!-- /.header-top-right-area -->
                        </div>
                    </div>
                </div>
            </div><!-- /.header-top-area -->

            <div class="navigation-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="site-navigation">
                                <nav class="navigation">
                                    <div class="menu-wrapper">
                                        <div class="menu-content">
                                            <ul class="mainmenu">
                                                <li class="megamenu">
                                                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}">Home</a>
                                                </li>
                                                <li class="megamenu">
                                                    <a class="{{ Request::is('about-us') ? 'active' : '' }}" href="{{url('about-us')}}">About Us</a>
                                                </li>
                                                <li>
                                                    <a class="{{ Request::is('products') ? 'active' : '' }}" href="{{url('products')}}">Products</a>
                                                </li>
                                                <li class="megamenu">
                                                    <a class="{{ Request::is('enquiry') ? 'active' : '' }}" href="{{url('enquiry')}}">Enquiry</a>
                                                </li>
                                                <li class="megamenu">
                                                    <a class="{{ Request::is('contact-us') ? 'active' : '' }}" href="{{url('contact-us')}}">Contact Us</a>
                                                </li>

                                            </ul> <!-- /.menu-list -->
                                        </div> <!-- /.hours-content-->
                                    </div><!-- /.menu-wrapper -->
                                </nav>
                            </div><!-- /.site-navigation -->
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.navigation-area -->

            <div class="mobile-sidebar-menu sidebar-menu">
                <div class="overlaybg"></div>
            </div>
        </header>
        <!--~~./ end site header ~~-->
        <!--~~~ Sticky Header ~~~-->
        <div id="sticky-header"></div>
        <!--~./ end sticky header ~-->
