(function ($) {
    "use strict";

    var deliciousaApp = {
        /* ---------------------------------------------
            ## Content Loading
        --------------------------------------------- */
        contentLoading: function () {
            $("body").imagesLoaded(function () {
                $('.preloader').delay(2000).fadeOut('slow');
                setTimeout(function () {
                    //After 2s, the no-scroll class of the body will be removed
                    $('body').removeClass('no-scroll');
                    $("body").addClass("loading-done");
                }, 2000); //Here you can change preloader time

                // Page Animation Script
                $("[data-animate]").scrolla({
                    mobile: true,
                    once: true
                });
            });
        },

        /* ---------------------------------------------
            ## Scroll top
        --------------------------------------------- */
        scroll_top: function () {
            $("body").append("<a href='#top' id='scroll-top' class='topbutton btn-hide'><span class='fa fa-angle-double-up'></span></a>");
            var $scrolltop = $('#scroll-top');
            $(window).on('scroll', function () {
                if ($(this).scrollTop() > $(this).height()) {
                    $scrolltop
                        .addClass('btn-show')
                        .removeClass('btn-hide');
                } else {
                    $scrolltop
                        .addClass('btn-hide')
                        .removeClass('btn-show');
                }
            });
            $("a[href='#top']").on('click', function () {
                $("html, body").animate({
                    scrollTop: 0
                }, "normal");
                return false;
            });
        },

        /* ---------------------------------------------
            ## Menu Script
        --------------------------------------------- */
        menu_script: function () {
            var w = $(window).width();
            if ($('.mobile-shop-cart').length) {
                var mobileShopCart = $('.header-card-area').clone().appendTo('.mobile-shop-cart');
            }
            if ($('.mobile-sidebar-menu').length && w < 1200) {
                var mobileShopCart = $('.site-navigation .navigation').clone().appendTo('.mobile-sidebar-menu');
            }

            if ($('.site-navigation .mainmenu').find('li > a').siblings('.sub-menu')) {
                $('.mainmenu li > .sub-menu').siblings('a').append("<span class='menu-arrow fa fa-angle-down'></span>");
            }
            if ($('.sidebar-left-menu .mainmenu').find('li > a').siblings('.sub-menu-outer')) {
                $('.mainmenu li > .sub-menu-outer').siblings('a').append("<span class='menu-arrow fa fa-angle-down'></span>");
            }

            // Accordion Menu
            var $AccordianMenu = $('.sidebar-menu .navigation a');
            var $mobileSubMenuOpen = $('.hamburger-menus');
            var $overlayClose = $('.overlaybg');
            var $menuClose = $('.sidebar-menu-area .menu-closed');

            $overlayClose.on('click', function (e) {
                e.preventDefault();
                $(this).parent().removeClass('sidemenu-active');
                $mobileSubMenuOpen.removeClass("click-menu");
            });
            $menuClose.on('click', function (e) {
                e.preventDefault();
                $(this).parent().removeClass('sidemenu-active');
                $('.site-content.sidebar-menu-active').removeClass('sidemenu-active');
                $('body').removeClass("sidemenu-active");
                $mobileSubMenuOpen.removeClass('click-menu');
            });

            $mobileSubMenuOpen.on('click', function () {
                $(this).toggleClass("click-menu");
                $('.mobile-sidebar-menu').toggleClass("sidemenu-active");
                $('body').toggleClass("sidemenu-active");
                if ($('.site-header-slider-block > .site-header').length) {
                    $(this).parent().toggleClass('sidemenu-active');
                }
                if ($('.site-header.header-style-six').length) {
                    $('.site-header.header-style-six').toggleClass('menu-active');
                }
                if ($('.site-header.header-style-fourteen').length) {
                    $('.sidebar-left-menu').toggleClass('menu-active');
                }
                if ($('.site-content.sidebar-menu-active').length) {
                    $('.site-content.sidebar-menu-active').toggleClass('sidemenu-active');
                    $('.site-content.sidebar-menu-active + .sidebar-menu-area').toggleClass('sidemenu-active');
                }
            });

            $AccordianMenu.on('click', function () {
                var link = $(this);
                var closestUl = link.closest("ul");
                var parallelActiveLinks = closestUl.find(".active")
                var closestLi = link.closest("li");
                var linkStatus = closestLi.hasClass("active");
                var count = 0;

                closestUl.find("ul").slideUp(function () {
                    if (++count == closestUl.find("ul").length)
                        parallelActiveLinks.removeClass("active");
                });

                if (!linkStatus) {
                    closestLi.children("ul").slideDown();
                    closestLi.addClass("active");
                }
            });
        },

        /*-------------------------------------------
            ## Sticky Header
        --------------------------------------------- */
        sticky_header: function () {
            if ($('#sticky-header').length) {
                var stickyMenu = $('.site-header').clone().appendTo('#sticky-header');
                $(window).on('scroll', function () {
                    var w = $(window).width();
                    if (w > 1199) {
                        if ($(this).scrollTop() > 350) {
                            $('#sticky-header').slideDown(500);
                        } else {
                            $('#sticky-header').slideUp(500);
                        }
                    }
                });
            }
        },

        /* ---------------------------------------------
            ## One Page Menu Script
        --------------------------------------------- */
        onePageMenu: function () {
            if ($('.site-header.header-style-twelve').length) {
                $('.mainmenu > li > a').on('click', function (e) {
                    var anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $(anchor.attr('href')).offset().top - 75
                    }, 1200);
                    e.preventDefault();
                });
            }
        },

        /* ---------------------------------------------
            ## spinner
        --------------------------------------------- */
        input_spinner: function () {
            if ($(".input-spinner").length) {
                var options_number = {
                    maxValue: 100,
                    minValue: 0
                }
                $(".input-spinner.product-no").WanSpinner(options_number);
                $(".input-spinner.number").WanSpinner(options_number);
            }
        },

        /* ---------------------------------------------
            ## Background Parallax
        --------------------------------------------- */
        bg_parallax: function () {
            if ($(".bg-parallax1").length) {
                $('.bg-parallax1').jarallax({
                    speed: 0.2
                });
            }
            if ($(".bg-parallax2").length) {
                $('.bg-parallax2').jarallax({
                    speed: 0.2
                });
            }
        },

        /* ---------------------------------------------
            ## Pop Up Scripts
        --------------------------------------------- */
        popupscript: function () {
            function getScrollBarWidth() {
                var $outer = $('<div>').css({ visibility: 'hidden', width: 100, overflow: 'scroll' }).appendTo('body'),
                    widthWithScroll = $('<div>').css({ width: '100%' }).appendTo($outer).outerWidth();
                $outer.remove();
                return 100 - widthWithScroll;
            }

            // Image Pop up
            var $popupImage = $(".popup-image");
            if ($popupImage.length > 0) {
                $popupImage.magnificPopup({
                    type: 'image',
                    fixedContentPos: false,
                    gallery: { enabled: true },
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    callbacks: {
                        // This prevenpt pushing the entire page to the right after opening Magnific popup image
                        open: function () {
                            $(".page-wrapper, .navbar-nav").css("margin-right", getScrollBarWidth());
                        },
                        close: function () {
                            $(".page-wrapper, .navbar-nav").css("margin-right", 0);
                        }
                    }
                });
            }

            //Video Popup
            var $videoPopup = $(".video-popup");
            if ($videoPopup.length > 0) {
                $videoPopup.magnificPopup({
                    type: "iframe",
                    removalDelay: 300,
                    mainClass: "mfp-fade",
                    overflowY: "hidden",
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">' +
                            '<div class="mfp-close"></div>' +
                            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                            '</div>',
                        patterns: {
                            youtube: {
                                index: 'youtube.com/',
                                id: 'v=',
                                src: '//www.youtube.com/embed/%id%?autoplay=1'
                            },
                            vimeo: {
                                index: 'vimeo.com/',
                                id: '/',
                                src: '//player.vimeo.com/video/%id%?autoplay=1'
                            },
                            gmaps: {
                                index: '//maps.google.',
                                src: '%id%&output=embed'
                            }
                        },
                        srcAction: 'iframe_src'
                    }
                });
            }
        },

        /* ---------------------------------------------
            ## Masonry Grid
        --------------------------------------------- */
        masonry_grid: function () {
            var $container = $('.masonry-grid');
            $container.imagesLoaded(function () {
                $container.masonry({
                    columnWidth: '.item',
                    itemSelector: '.item'
                });
            });

            $('a[data-toggle=tab]').each(function () {
                var $this = $(this);

                $this.on('shown.bs.tab', function () {
                    $container.imagesLoaded(function () {
                        $container.masonry({
                            columnWidth: '.item',
                            itemSelector: '.item'
                        });
                    });
                });
            });

        },

        /*-------------------------------------------
            ## Initialize Plugin
        --------------------------------------------- */
        initialize_plugin: function () {
            // Nice Select for select input type
            if ($('.select-custom').length) {
                $('.select-custom').niceSelect();
            }

            // Datepicker
            $('[data-toggle="datepicker"]').datepicker({
                autoHide: true
            });

            // Slider
            $('.carousel').carousel({
                interval: 7000
            })

            // Scorll Bar
            if ($('.activeScrollBar').length) {
                var $sidebar_scroll = $('.activeScrollBar');
                $sidebar_scroll.TrackpadScrollEmulator();
                $(window).resize(function () {
                    setTimeout(function () {
                        $sidebar_scroll.TrackpadScrollEmulator('recalculate');
                    }, 250);
                });
            }
        },

        /* ---------------------------------------------
            ## Count Down
        --------------------------------------------- */
        count_down: function () {
            if ($('.countdown').length) {
                $('.countdown').final_countdown({
                    start: '1362139200',
                    end: '1409961320',
                    now: '1387991319',
                    seconds: {
                        borderColor: '#c51c23',
                        borderWidth: '2'
                    },
                    minutes: {
                        borderColor: '#c51c23',
                        borderWidth: '2'
                    },
                    hours: {
                        borderColor: '#c51c23',
                        borderWidth: '2'
                    },
                    days: {
                        borderColor: '#c51c23',
                        borderWidth: '2'
                    }
                });
            }
        },

        /* ---------------------------------------------
            ## Promo Numbers
         --------------------------------------------- */
        promo_numbers: function () {
            $(".hg-promo-numbers").each(function () {
                $(this).isInViewport(function (status) {
                    if (status === "entered") {
                        for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                            var el = document.querySelectorAll('.odometer')[i];
                            el.innerHTML = el.getAttribute("data-odometer-final");
                        }
                    }
                });
            });
        },

        /* ---------------------------------------------
            ## Content Video Responsive
         --------------------------------------------- */
        content_video: function () {
            var $postVideo = $('.blog-single-page');
            $postVideo.fitVids();
        },

        /* ---------------------------------------------
            ## Home Pagepiling
        --------------------------------------------- */
        home_pagepiling: function () {
            if ($('#pagepiling').length) {
                $('#pagepiling').pagepiling({
                    menu: null,
                    direction: 'vertical',
                    verticalCentered: true,
                    sectionsColor: [],
                    anchors: [],
                    scrollingSpeed: 700,
                    easing: 'swing',
                    loopBottom: false,
                    loopTop: false,
                    css3: true,
                    navigation: {
                        'textColor': '#000',
                        'bulletsColor': '#000',
                        'position': 'right'
                    },
                    normalScrollElements: null,
                    normalScrollElementTouchThreshold: 5,
                    touchSensitivity: 5,
                    keyboardScrolling: true,
                    sectionSelector: '.section',
                    animateAnchor: false,

                    //events
                    onLeave: function (index, nextIndex, direction) { },
                    afterLoad: function (anchorLink, index) { },
                    afterRender: function () { },
                });
            }
        },

        /* ---------------------------------------------
            ## Home Carousel
         --------------------------------------------- */
        home_carousel: function () {
            if ($('.home-swiper-slider').length) {
                var swiper = new Swiper('.home-swiper-slider .swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    autoplay: true,
                    loop: true,
                    speed: 2000,
                    watchSlidesProgress: true,
                    navigation: {
                        nextEl: '.carousel-nav-text .btn-next',
                        prevEl: '.carousel-nav-text .btn-prev',
                    },
                });
            }
            if ($('.home-carousel').length) {
                var swiper = new Swiper('.home-carousel .swiper-container', {
                    slidesPerView: 4,
                    spaceBetween: 0,
                    autoplay: true,
                    loop: true,
                    speed: 2000,
                    watchSlidesProgress: true,
                    mousewheel: true,
                    keyboard: true,
                    scrollbar: {
                        el: '.swiper-scrollbar',
                        hide: false,
                        draggable: true,
                    },

                    breakpoints: {
                        220: {
                            slidesPerView: 1,
                        },
                        575: {
                            slidesPerView: 2,
                        },
                        991: {
                            slidesPerView: 3,
                        },
                        1400: {
                            slidesPerView: 4,
                        }
                    },
                });
            }
        },

        /* ---------------------------------------------
            ## Megamenu Carousel
        --------------------------------------------- */
        megamenu_carousel: function () {
            var $megamenu_carousel = $('.megamenu-carousel');
            if ($megamenu_carousel.length) {
                var items = 5;
                $megamenu_carousel.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: true,
                    responsive: {
                        280: {
                            items: 1
                        },
                        1200: {
                            items: 4
                        },
                        1400: {
                            items: items
                        }
                    }
                });
            }
        },

        /* ---------------------------------------------
            ## Food Menu Carousel
        --------------------------------------------- */
        foodmenu_carousel: function () {
            var $foodmenu_carousel1 = $('.foodmenu_carousel');
            if ($foodmenu_carousel1.length) {
                var items = 4;
                $foodmenu_carousel1.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 30,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1400: {
                            items: items
                        }
                    }
                });
            }
            $('.food-menu-block.style-two .carousel-nav-text .btn-prev').click(function () {
                $foodmenu_carousel1.trigger('prev.owl.carousel');
            });
            $('.food-menu-block.style-two .carousel-nav-text .btn-next').click(function () {
                $foodmenu_carousel1.trigger('next.owl.carousel');
            });


            var $foodmenu_carousel2 = $('.foodmenu_carousel_two');
            if ($foodmenu_carousel2.length) {
                var items = 4;
                $foodmenu_carousel2.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1400: {
                            items: items
                        }
                    }
                });
            }
            $('.food-menu-block.style-six .carousel-nav-text .btn-prev').click(function () {
                $foodmenu_carousel2.trigger('prev.owl.carousel');
            });
            $('.food-menu-block.style-six .carousel-nav-text .btn-next').click(function () {
                $foodmenu_carousel2.trigger('next.owl.carousel');
            });


            var $foodmenu_carousel3 = $('.foodmenu_carousel_three');
            if ($foodmenu_carousel3.length) {
                var items = 4;
                $foodmenu_carousel3.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ["<span>prev</span>", "<span>next</span>"],
                    responsive: {
                        280: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1400: {
                            items: items
                        }
                    }
                });
            }

            var $foodmenu_carousel4 = $('.food-item-carousel-single');
            if ($foodmenu_carousel4.length) {
                var items = 1;
                $foodmenu_carousel4.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: true
                });
            }

            var $foodmenu_carousel5 = $('.foodmenu_carousel_four');
            if ($foodmenu_carousel5.length) {
                var items = 4;
                $foodmenu_carousel5.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 30,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: true,
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1400: {
                            items: items
                        }
                    }
                });
            }

            var $foodmenu_carousel6 = $('.foodmenu_carousel_five');
            if ($foodmenu_carousel6.length) {
                var items = 3;
                $foodmenu_carousel6.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 30,
                    singleItem: false,
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ["<span class='icon-back'></span>", "<span class='icon-next'></span>"],
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }
        },

        /* ---------------------------------------------
            ## Single Foods
        --------------------------------------------- */
        single_food: function () {
            if ($('.food-detail-slide').length > 0) {
                $('.food-detail-slide').owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: false,
                    nav: false,
                    dots: false
                });
            }

            if ($('.food-detail-slide').length > 0) {
                // Pref add class active to 1st thumbnail via js
                $('.thumbnails').eq(0).addClass('active');
                // When slider autoplay or drag is true 
                $('.food-detail-slide').on('changed.owl.carousel', function (event) {
                    $('.thumbnails').removeClass('active');
                    var sliders = 3;
                    var currentItem = event.item.index - 2;
                    if (currentItem >= sliders) {
                        currentItem = 0;
                    }
                    $('.thumbnails').eq(currentItem).addClass('active');
                });
                // When thumbnail is clicked
                $('.thumbnails a').click(function (event) {
                    event.preventDefault();
                    $('.thumbnails').removeClass('active');
                    var index = $('.thumbnails a').index(this);
                    $('.thumbnails').eq(index).addClass('active');
                    $('.food-detail-slide').trigger('to.owl.carousel', [index, 300, true]);
                });
            }
        },

        /* ---------------------------------------------
            ## Related Foodmenu Carousel
        --------------------------------------------- */
        related_foodmenu_carousel: function () {
            var $related_foodmenu = $('.related-food-carousel');
            if ($related_foodmenu.length) {
                var items = 3;
                $related_foodmenu.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 30,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }
            $('.related-foodmenu-block .carousel-nav-text .btn-prev').click(function () {
                $related_foodmenu.trigger('prev.owl.carousel');
            });
            $('.related-foodmenu-block .carousel-nav-text .btn-next').click(function () {
                $related_foodmenu.trigger('next.owl.carousel');
            });
        },

        /* ---------------------------------------------
            ## Product Food Carousel
        --------------------------------------------- */
        product_food_carousel: function () {
            var $product_food = $('.product-food-carousel');
            if ($product_food.length) {
                var items = 4;
                $product_food.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 20,
                    singleItem: false,
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ["<span class='icon-back'></span>", "<span class='icon-next'></span>"],
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }

            var $product_food2 = $('.product-food-carousel2');
            if ($product_food2.length) {
                var items = 3;
                $product_food2.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 20,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }
            $('.product-block-carousel-nav .carousel-nav-text .btn-prev').click(function () {
                $product_food2.trigger('prev.owl.carousel');
            });
            $('.product-block-carousel-nav .carousel-nav-text .btn-next').click(function () {
                $product_food2.trigger('next.owl.carousel');
            });

            var $product_food3 = $('.product-food-carousel3');
            if ($product_food3.length) {
                var items = 4;
                $product_food3.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 20,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }
            $('.our-product-block.style-four .carousel-nav-text .btn-prev').click(function () {
                $product_food3.trigger('prev.owl.carousel');
            });
            $('.our-product-block.style-four .carousel-nav-text .btn-next').click(function () {
                $product_food3.trigger('next.owl.carousel');
            });
        },

        /* ---------------------------------------------
            ## Chef Carousel
        --------------------------------------------- */
        chef_carousel: function () {
            var $chef_items = $('.chef-carousel');
            if ($chef_items.length) {
                var items = 4;
                $chef_items.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 30,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }
            $('.chef-block .carousel-nav-text .btn-prev').click(function () {
                $chef_items.trigger('prev.owl.carousel');
            });
            $('.chef-block .carousel-nav-text .btn-next').click(function () {
                $chef_items.trigger('next.owl.carousel');
            });
        },
        /* ---------------------------------------------
            ## Twitter Feed Carousel
        --------------------------------------------- */
        twitterfeed_carousel: function () {
            var $twitterfeed_items = $('.twitter-feed-carousel');
            if ($twitterfeed_items.length) {
                var items = 1;
                $twitterfeed_items.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: true
                });
            }
        },

        /* ---------------------------------------------
            ## Blog Carousel
        --------------------------------------------- */
        blog_carousel: function () {
            var $blog_items = $('.blog-post-carousel');
            if ($blog_items.length) {
                var items = 3;
                $blog_items.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 30,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }
            $('.news-block .carousel-nav-text .btn-prev').click(function () {
                $blog_items.trigger('prev.owl.carousel');
            });
            $('.news-block .carousel-nav-text .btn-next').click(function () {
                $blog_items.trigger('next.owl.carousel');
            });
        },

        /* ---------------------------------------------
            ## Blog Featured Carousel
        --------------------------------------------- */
        blog_featured_carousel: function () {
            var $blog_items = $('.blog-featured-carousel');
            if ($blog_items.length) {
                var items = 3;
                $blog_items.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 1
                        },
                        650: {
                            items: 2
                        },
                        992: {
                            items: 2
                        },
                        1200: {
                            items: items
                        }
                    }
                });
            }
        },

        /* ---------------------------------------------
            ## Ucoming Event
        --------------------------------------------- */
        ucoming_event: function () {
            var ucomingEvent = jQuery('.upcoming-event-carousel');
            if (ucomingEvent.length) {
                var items = 1;
                ucomingEvent.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ["<span class='icon-back'></span>", "<span class='icon-next'></span>"]
                });
            }
        },

        /* ---------------------------------------------
            ## Chef Reviews
        --------------------------------------------- */
        chef_reviews: function () {
            var $chef_reviews = $('.chef-reviews-carousel');
            if ($chef_reviews.length) {
                var items = 1;
                $chef_reviews.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ["<span class='icon-back'></span>", "<span class='icon-next'></span>"],
                });
            }
        },

        /* ---------------------------------------------
            ## Testimonial Carousel
        --------------------------------------------- */
        testimonial_carousel: function () {
            var testimonialkSlider = jQuery('.testimonail-carousel');
            if (testimonialkSlider.length) {
                var items = 1;
                testimonialkSlider.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: true
                });
            }

            var $testimonialkSlider2 = $('.testimonail-carousel2');
            if ($testimonialkSlider2.length) {
                var items = 3;
                $testimonialkSlider2.owlCarousel({
                    center: true,
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 0,
                    singleItem: true,
                    nav: true,
                    dots: false,
                    navText: ["<span class='icon-back'></span>", "<span class='icon-next'></span>"],
                    responsive: {
                        280: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        768: {
                            items: 3
                        }
                    }
                });
            }
        },

        /* ---------------------------------------------
            ## Sidebar Script
        --------------------------------------------- */
        sidebarScript: function () {
            if ($('.sidebar-items').length) {
                $('.sidebar-items').theiaStickySidebar({
                    'containerSelector': '.blog-page-block',
                    'additionalMarginTop': 0,
                    'minWidth': 992,
                });
            }
            if ($('.sidebar-items').length) {
                $('.sidebar-items').theiaStickySidebar({
                    'containerSelector': '.home-blog-page',
                    'additionalMarginTop': 0,
                    'minWidth': 992,
                });
            }
        },

        /* ---------------------------------------------
          ## Contact Form Script
        --------------------------------------------- */
        contactFormScript: function () {
            /* Forms validation */
            //if submit button is clicked
            $('#submit').on('click', function () {
                  
                //Get the data from all the fields
                var name = $('input[name=name]');
                var email = $('input[name=email]');
                var subject = $('input[name=subject]');
                var comment = $('textarea[name=comment]');
                var returnError = false;
              
                //Simple validation to make sure user entered something
                //Add your own error checking here with JS, but also do some error checking with PHP.
                //If error found, add hightlight class to the text field
                if (name.val()=='') {
                    name.addClass('error');
                    returnError = true;
                } else name.removeClass('error');
              
                if (email.val()=='') {
                    email.addClass('error');
                    returnError = true;
                } else email.removeClass('error');
              
                if (comment.val()=='') {
                    comment.addClass('error');
                    returnError = true;
                } else comment.removeClass('error');
              
              
                // Highlight all error fields, then quit.
                if(returnError == true){
                    return false;   
                }
              
                //organize the data
                var data = 'name=' + name.val() + '&email=' + email.val() + '&subject=' + 
                subject.val() + '&comment='  + encodeURIComponent(comment.val());
              
                //disabled all the text fields
                $('.text, .form-control').attr('disabled','true');
              
                //show the loading sign
                $('.loading').show();
              
                //start the ajax
                $.ajax({
                    //this is the php file that processes the data and sends email
                    url: "process.php", 

                    //GET method is used
                    type: "GET",

                    //pass the data         
                    data: data,     

                    //Do not cache the page
                    cache: false,
                  
                    //success
                    success: function (html) {              
                        //if process.php returned 1/true (send mail success)
                        if (html==1) {                  
                            //hide the form
                            $('.form').fadeOut('slow');                 
                          
                            //show the success message
                            $('.done').fadeIn('slow');
                          
                            //if process.php returned 0/false (send mail failed)
                        } else alert('Sorry, unexpected error. Please try again later.');               
                    }       
                });

                //cancel the submit button default behaviours
                return false;
            });
        },

        /* ---------------------------------------------
          ## Reservation Form Script
        --------------------------------------------- */
        reservationScript: function() {
            //if submit button is clicked
            $('#reser-submit').on('click', function () {
                  
                //Get the data from all the fields
                var name2 = $('input[name=name2]');
                var email2 = $('input[name=email2]');
                var comment2 = $('textarea[name=comment2]');
                var date = $('input[name=date]');
                var phone = $('input[name=phone]');
                var personnum = $('select[name=personnum]');
                var branch = $('select[name=branch]');
                var occasion = $('select[name=occasion]');
                var food = $('select[name=food]');
                var booking_type = $('select[name=booking_type]');
                var returnError = false;
            
                //Simple validation to make sure user entered something
                //Add your own error checking here with JS, but also do some error checking with PHP.
                //If error found, add hightlight class to the text field
            
                if (name2.val()=='') {
                    name2.addClass('error');
                    returnError = true;
                } else name2.removeClass('error');
              
                if (email2.val()=='') {
                    email2.addClass('error');
                    returnError = true;
                } else email2.removeClass('error');
              
                if (comment2.val()=='') {
                    comment2.addClass('error');
                    returnError = true;
                } else comment2.removeClass('error');
            
                if (date.val()=='') {
                    date.addClass('error');
                    returnError = true;
                } else date.removeClass('error');
              
                if (phone.val()=='') {
                    phone.addClass('error');
                    returnError = true;
                } else phone.removeClass('error');
              
                if (personnum.val()=='') {
                    personnum.addClass('error');
                    returnError = true;
                } else personnum.removeClass('error');
            
                if (branch.val()=='') {
                    branch.addClass('error');
                    returnError = true;
                } else branch.removeClass('error');
              
                if (occasion.val()=='') {
                    occasion.addClass('error');
                    returnError = true;
                } else occasion.removeClass('error');

                if (food.val()=='') {
                    food.addClass('error');
                  returnError = true;
                }

                if (booking_type.val() == '') {
                    booking_type.addClass('error');
                    returnError = true;
                } else food.removeClass('error');
                
                //organize the data
                var data = 'name2=' + name2.val() + '&email2=' + email2.val() + '&date=' + 
                date.val() + '&phone=' + phone.val() + '&personnum=' + personnum.val() + '&branch=' + branch.val() + '&occasion=' + occasion.val() + '&food=' + food.val() + '&booking_type=' + booking_type.val() + '&comment2='  + encodeURIComponent(comment2.val());
              
                //disabled all the text fields
                $('.form-controllar').attr('disabled','true');
              
                //show the loading sign
                $('.loading2').show();
              
                //start the ajax
                $.ajax({
                    //this is the php file that processes the data and sends email
                    url: "reser-process.php", 

                    //GET method is used
                    type: "GET",

                    //pass the data         
                    data: data,     

                    //Do not cache the page
                    cache: false,
                    
                    //success
                    success: function (html) {              
                        //if process.php returned 1/true (send mail success)
                        if (html==1) {                  
                            //hide the form

                            $('.reservation-form').fadeOut('slow');                 
                          
                            //show the success message
                            $('.done2').fadeIn('slow');
                          
                            //if process.php returned 0/false (send mail failed)
                        } else alert('Sorry, unexpected error. Please try again later.');               
                    }       
                });
              
                //cancel the submit button default behaviours
                return false;
            });
        },
        /* ---------------------------------------------
          ## Mailchimp Form Script
        --------------------------------------------- */
        mailChimpSubsCription: function() {
            var sign_up_form = $('#mc-form');

            sign_up_form.on('submit', function (e) {
                // If the validator does not prevent form submit
                if (!e.isDefaultPrevented()) {
                    var url = 'subscription.php';
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(this).serialize(),
                        cache: false,
                        success: function (data) {
                            var messageAlert = 'alert-' + data.type;

                            var messageText = data.message;

                            var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                            if (messageAlert && messageText) {

                                $('#mc-form').find('.messages').html(alertBox);
                                // Empty the form
                                $('#mc-form')[0].reset();
                            }
                        }
                    });
                    return false;
                }
            });
        },

        /* ---------------------------------------------
         function initializ
         --------------------------------------------- */
        initializ: function () {
            deliciousaApp.scroll_top();
            deliciousaApp.menu_script();
            deliciousaApp.sticky_header();
            deliciousaApp.onePageMenu();
            deliciousaApp.input_spinner();
            deliciousaApp.bg_parallax();
            deliciousaApp.popupscript();
            deliciousaApp.initialize_plugin();
            deliciousaApp.count_down();
            deliciousaApp.promo_numbers();
            deliciousaApp.content_video();
            deliciousaApp.home_pagepiling();
            deliciousaApp.home_carousel();
            deliciousaApp.megamenu_carousel();
            deliciousaApp.foodmenu_carousel();
            deliciousaApp.single_food();
            deliciousaApp.related_foodmenu_carousel();
            deliciousaApp.chef_carousel();
            deliciousaApp.twitterfeed_carousel();
            deliciousaApp.blog_carousel();
            deliciousaApp.blog_featured_carousel();
            deliciousaApp.product_food_carousel();
            deliciousaApp.ucoming_event();
            deliciousaApp.chef_reviews();
            deliciousaApp.testimonial_carousel();
            deliciousaApp.sidebarScript();
            deliciousaApp.contactFormScript();
            deliciousaApp.reservationScript();
            deliciousaApp.mailChimpSubsCription();
        }
    };
    /* ---------------------------------------------
     Document ready function
     --------------------------------------------- */
    $(function () {
        deliciousaApp.initializ();
    });

    $(window).on('load', function () {
        deliciousaApp.contentLoading();
        deliciousaApp.masonry_grid();
    });
})(jQuery);