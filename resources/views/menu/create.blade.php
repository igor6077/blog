@extends('layouts.app')

@section('body')

<!-- Preloader -->
<section id="preloader">
    <div class="loader" id="loader">
        <div class="loader-img"></div>
    </div>
</section>
<!-- End Preloader -->

<!-- Sidebar Menu -->
<div class="sidebar-menu">
    <div class="sidembar-menu-wrap">
        <a href="javascript:void(0)" class="sidebar-close-icon icon--close">
            <i class="ion ion-android-close"></i>
        </a>
        <!--Sidebar Content-->
        <div class="sidebar-content">
            <h5 class="white">Sign In</h5>
            <form role="search" id="searchform" action="/search" method="get" class="sign-in">
                <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Email" value="" />
                <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Password" value="" />
                <input type="submit" class="btn btn-md btn-color-b form-full" value="Sign In" />
                <a>New Customer?</a>
            </form>
            <ul>
                <li><a class="all-demos-link" target="_blank" href="../demo.html">Main Demo Page</a></li>
                <li><a href="home.html">Home Default</a></li>
                <li><a href="portfolio-grid-2col.html">Portfolio</a></li>
                <li><a href="login-register.html">Login & Signup</a></li>
                <li><a href="faq-1.html">FAQ</a></li>
                <li><a href="about-1.html">About</a></li>
                <li><a href="service-1.html">Service</a></li>
                <li><a href="blog-grid-3col.html">Blog</a></li>
                <li><a href="404-error-1.html">404 Error</a></li>
                <li><a href="shop-checkout.html">Shopping Cart</a></li>
                <li><a href="contact-1.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar Menu -->

<!-- Site Wraper -->
<div class="wrapper">

    <!-- Header ("header--dark", "header-transparent", "header--sticky")-->
    <header id="header" class="header header--dark header-transparent header--sticky">
        <!-- Nav Bar -->
        <nav id="navigation" class="header-nav">
            <div class="container">
                <div class="row d-flex flex-md-row align-items-center">
                    <div class="logo mr-auto">
                        <!--logo-->
                        <a href="index.html">
                            <img class="logo-dark" src="/assets/img/logo-black.png" alt="Mazel" />
                            <img class="logo-light" src="/assets/img/logo-white.png" alt="Mazel" />
                        </a>
                        <!--End logo-->
                    </div>


                    <div class="nav-menu ml-auto">
                        <ul class="">
                            <li class="nav-menu-item">
                                <a href="#">Home</a>
                                <div class="nav-dropdown col2-dropdown">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><span class="dropdown-title">Multi Page</span></li>
                                                <li><a href="home.html">Default</a></li>
                                                <li><a href="home-video.html">Intro Video</a></li>
                                                <li><a href="home-youtube.html">Intro Youtube</a></li>
                                                <li><a href="home-static.html">Intro Static</a></li>
                                                <li><a href="home-agency-grid.html">Agency Grid</a></li>
                                                <li><a href="home-agency-masonry.html">Agency Masonry</a></li>
                                                <li><a href="home-fullwidth-slider.html">Fullwidth Slider</a></li>
                                                <li><a href="home-text-rotator1.html">Text Rotator1</a></li>
                                                <li><a href="home-text-rotator2.html">Text Rotator2</a></li>
                                                <li><a href="home-personal.html">Personal</a></li>
                                                <li><a href="home-fullscreen.html">Full Screen</a></li>
                                                <li><a href="home-canvas-pattern.html">Canvas Pattern</a></li>
                                                <li><a href="home-section-scroll.html">Page Section Scroll</a></li>
                                                <li><a href="shop-2col.html">Shop</a></li>
                                                <li><a href="home-revolution-slider1.html">Revolution Slider 1</a></li>
                                                <li><a href="home-revolution-slider2.html">Revolution Slider 2</a></li>
                                                <li><a href="home-coming-soon.html">Comming Soon</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><span class="dropdown-title">One Page</span></li>
                                                <li><a href="onepage.html">Default</a></li>
                                                <li><a href="onepage-personal.html">Personal</a></li>
                                                <li><a href="onepage-video.html">Video</a></li>
                                                <li><a href="onepage-youtube.html">Youtube</a></li>
                                                <li><a href="onepage-static.html">Static</a></li>
                                                <li><a href="onepage-fullwidth-slider.html">Fullwidth</a></li>
                                                <li><a href="onepage-text-rotator1.html">Text Rotator1</a></li>
                                                <li><a href="onepage-text-rotator2.html">Text Rotator2</a></li>
                                                <li><a href="onepage-canvas-pattern.html">Canvas Pattern</a></li>
                                                <li><a href="onepage-revolution-slider1.html">Revolution Slider 1</a></li>
                                                <li><a href="onepage-revolution-slider2.html">Revolution Slider 2</a></li>
                                            </ul>
                                        </div>


                                    </div>
                                </div>
                            </li>
                            <li class="nav-menu-item">
                                <a href="#">Pages</a>
                                <div class="nav-dropdown">
                                    <ul>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li class="nav-menu-item">
                                            <a href="#">About Us</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="about-1.html">About 1</a></li>
                                                <li><a href="about-2.html">About 2</a></li>
                                                <li><a href="about-3.html">About 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Service</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="service-1.html">Service 1</a></li>
                                                <li><a href="service-2.html">Service 2</a></li>
                                                <li><a href="service-3.html">Service 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Contact Us</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="contact-1.html">Contact 1</a></li>
                                                <li><a href="contact-2.html">Contact 2</a></li>
                                                <li><a href="contact-3.html">Contact 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Faq</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="faq-1.html">Faq 1</a></li>
                                                <li><a href="faq-2.html">Faq 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Login / Register</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="login-register.html">Login / Register</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">404 Error</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="404-error-1.html">404 page1</a></li>
                                                <li><a href="404-error-2.html">404 page2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="sidebar-left.html">Sidebar Left</a></li>
                                        <li><a href="sidebar-right.html">Sidebar Right</a></li>
                                        <li><a href="blank-page.html">Blank Page</a></li>

                                        <li class="nav-menu-item">
                                            <a href="#">Submenu Right</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="#">Submenu 1</a></li>
                                                <li><a href="#">Submenu 2</a></li>
                                                <li><a href="#">Submenu 3</a></li>
                                                <li><a href="#">Submenu 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Submenu left</a>
                                            <ul class="nav-dropdown-sub left">
                                                <li><a href="#">Submenu 1</a></li>
                                                <li><a href="#">Submenu 2</a></li>
                                                <li><a href="#">Submenu 3</a></li>
                                                <li><a href="#">Submenu 4</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-menu-item mega-menu">
                                <a href="#">Portfolio</a>
                                <div class="nav-dropdown mega-dropdown">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul>
                                                    <li><span class="dropdown-title">Grid</span></li>
                                                    <li><a href="portfolio-grid-2col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-grid-2col-no_spacing.html">2 Columns no-Spacing</a></li>
                                                    <li><a href="portfolio-grid-3col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-grid-3col-no_spacing.html">3 Columns no-Spacing</a></li>
                                                    <li><a href="portfolio-grid-4col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-grid-4col-no_spacing.html">4 Columns no-Spacing</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul>
                                                    <li><span class="dropdown-title">Masonry</span></li>
                                                    <li><a href="portfolio-masonry-2col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-2col-no_spacing.html">2 Columns no-Spacing</a></li>
                                                    <li><a href="portfolio-masonry-3col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-3col-no_spacing.html">3 Columns no-Spacing</a></li>
                                                    <li><a href="portfolio-masonry-4col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-4col-no_spacing.html">4 Columns no-Spacing</a></li>
                                                </ul>
                                                <ul>
                                                    <li><span class="dropdown-title">Lightbox</span></li>
                                                    <li><a href="portfolio-lightbox-grid.html">Grid</a></li>

                                                    <li><a href="blog-masonry-2col-sidebar.html">2 Columns - sidebar</a></li>
                                                    <li><a href="blog-masonry-3col.html">3 Columns</a></li>
                                                </ul>
                                                <ul>
                                                    <li><span class="dropdown-title">One Columns</span></li>
                                                    <li><a href="blog-1col.html">no-sidebar</a></li>
                                                    <li><a href="blog-1col-sidebar.html">with sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul>
                                                    <li><span class="dropdown-title">Blog Detail</span></li>
                                                    <li><a href="blog-single-image-post.html">Image Post</a></li>
                                                    <li><a href="blog-single-slider-post.html">Slider Post</a></li>
                                                    <li><a href="blog-single-video-post.html">Video Post</a></li>
                                                    <li><a href="blog-single-audio-post.html">Audio Post</a></li>
                                                    <li><a href="blog-single-youtube-post.html">Youtube Post</a></li>
                                                    <li><a href="blog-single-vimeo-post.html">Vimeo Post</a></li>
                                                    <li><a href="blog-single-quote-post.html">Quote Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                            <li class="nav-menu-item">
                                <a href="#">Elements</a>
                                <div class="nav-dropdown">
                                    <ul>
                                        <li><a href="element-components.html">Components</a></li>
                                        <li><a href="element-tabs-and-accordian.html">Tabs & Accordian</a></li>
                                        <li><a href="element-slider.html">Slider</a></li>
                                        <li><a href="element-team.html">Team</a></li>
                                        <li><a href="element-pricing.html">Pricing</a></li>
                                        <li><a href="element-video-and-audio.html">Video / Audio</a></li>
                                        <li><a href="element-typography.html">Typography</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-menu-item">
                                <a href="#">Shop</a>
                                <div class="nav-dropdown col2-dropdown left">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><a href="shop-2col.html">Shop 2 Columns</a></li>
                                                <li><a href="shop-3col.html">Shop 3 Columns</a></li>
                                                <li><a href="shop-4col.html">Shop 4 Columns</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>

                                                <li><a href="portfolio-lightbox-masonry.html">Masonry</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><span class="dropdown-title">Wide</span></li>
                                                <li><a href="portfolio-wide-grid.html">Grid</a></li>
                                                <li><a href="portfolio-wide-grid-no_spacing.html">Grid no-Spacing</a></li>
                                                <li><a href="portfolio-wide-masonry.html">Masonry</a></li>
                                                <li><a href="portfolio-wide-masonry-no_spacing.html">Masonry no-Spacing</a></li>
                                            </ul>
                                            <ul>
                                                <li><span class="dropdown-title">Classical</span></li>
                                                <li><a href="portfolio-classical-spacing.html">Spacing</a></li>
                                                <li><a href="portfolio-classical-no_spacing.html">no-Spacing</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><span class="dropdown-title">Single</span></li>
                                                <li><a href="portfolio-single1.html">Single 1</a></li>
                                                <li><a href="portfolio-single2.html">Single 2</a></li>
                                                <li><a href="portfolio-single3.html">Single 3</a></li>
                                                <li><a href="portfolio-single4.html">Single 4</a></li>
                                                <li><a href="portfolio-single5-slider.html">Single 5 - Slider</a></li>
                                                <li><a href="portfolio-single6-video.html">Single 6 - Video</a></li>
                                                <li><a href="portfolio-single7-youtube.html">Single 7 - youtube</a></li>
                                                <li><a href="portfolio-single8-vimeo.html">Single 8 - vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    </li>
                    <li class="nav-menu-item">
                        <a href="#">Blog</a>
                        <div class="nav-dropdown col3-dropdown center">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul>
                                        <li><span class="dropdown-title">Grid</span></li>
                                        <li><a href="blog-grid-2col.html">2 Columns</a></li>
                                        <li><a href="blog-grid-2col-sidebar.html">2 Columns - sidebar</a></li>
                                        <li><a href="blog-grid-3col.html">3 Columns</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul>
                                        <li><span class="dropdown-title">Masonry</span></li>
                                        <li><a href="blog-masonry-2col.html">2 Columns</a></li>

                                        <li><a href="shop-detail.html">Shop Detail</a></li>
                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="nav-icons">
                    <div class="nav-icon-item d-lg-none">
                        <span class="nav-icon-trigger menu-mobile-btn align-middle"><i class="ion"></i></span>
                    </div>
                    <div class="nav-icon-item">
                        <span class="nav-icon-trigger search-menu_btn align-middle"><i class="ion ion-ios-search"></i></span>
                        <div class="search-menu-bar">
                            <form>
                                <input class="seach-input input--sm form-full" id="seach_input" name="seach_input" placeholder="Please Enter Keywords" type="search" />
                            </form>
                        </div>
                    </div>

                    <div class="nav-icon-item">
                        <span class="nav-icon-trigger cart-menu_btn align-middle"><i class="ion ion-ios-cart-outline"></i></span>
                        <div class="cart-menu-bar">
                            <ul class="cart-menu-list">
                                <li>
                                    <a class="product-img">
                                        <img src="/assets/img/product/02.jpg" alt="fashion">
                                    </a>
                                    <div class="product-content">
                                        <a href="javascript:void(0)" class="product-remove">
                                            <i class="ion ion-android-close"></i>
                                        </a>
                                        <a class="product-title">Digital Trending Z Camera</a>
                                        <div class="product-cart-collateral">
                                            <span class="qty-cart">1</span><span>x</span><span class="product-price-amount color--dark"><span class="currency-sign">$</span>399.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="product-img">
                                        <img src="/assets/img/product/02.jpg" alt="fashion">
                                    </a>
                                    <div class="product-content">
                                        <a href="javascript:void(0)" class="product-remove">
                                            <i class="ion ion-android-close"></i>
                                        </a>
                                        <a class="product-title">Digital Trending Z Camera</a>
                                        <div class="product-cart-collateral">
                                            <span class="qty-cart">1</span><span>x</span><span class="product-price-amount color--dark"><span class="currency-sign">$</span>399.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="lead dark cart-total">
                                <span>Subtotle</span>
                                <span class="float-right"><span class="currency-sign">$</span>798</span>
                            </p>

                            <a class="btn btn-xs btn-color-b form-full" href="shop-checkout.html">Checkout</a>
                        </div>
                    </div>

                    <div class="nav-icon-item">
                        <span class="nav-icon-trigger sidebar-menu_btn align-middle"><i class="ion ion-navicon"></i></span>
                    </div>

                </div>
            </div>
</div>
<!-- Site Wraper End -->

@endsection
