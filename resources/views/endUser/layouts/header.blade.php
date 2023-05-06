<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Ciyatrip - Tour & Travel Hotel Booking HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('EndUserAssets/images/favicon.ico') }}" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/fontawesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/bootstrap/bootstrap.min.css') }}" />
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/datetimepicker/datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/animate/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/range-slider/ion.rangeSlider.css') }}" />
    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('EndUserAssets/css/style.css') }}" />
    @stack('css')
</head>
<body>
<!--=================================
Header -->
<header class="header header-sticky default header-transparent">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <div class="container main-header position-relative">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="index.html">
                <img class="img-fluid" src="{{ asset('EndUserAssets/images/logo-light.svg') }}" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-end justify-content-lg-center">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.html"><span>Home 01</span></a></li>
                            <li class="active"><a class="dropdown-item" href="index-02.html"><span>Home 02</span></a></li>
                            <li><a class="dropdown-item" href="index-03.html"><span>Home 03</span></a></li>
                            <li><a class="dropdown-item" href="index-04.html"><span>Home 04</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item mega-menu">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        <span class="mb-3 nav-title mt-0 fs-6 fw-600"> Pages</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="about-us.html"><span>About Us</span></a></li>
                                            <li><a class="dropdown-submenu" href="team.html"><span>Team</span></a></li>
                                            <li><a class="dropdown-submenu" href="team-detail.html"><span>Team Details</span></a></li>
                                            <li><a class="dropdown-submenu" href="booking.html"><span>Booking</span></a></li>
                                            <li><a class="dropdown-submenu" href="contact-us.html"><span>Contact us</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 mt-3 mt-sm-0">
                                        <span class="mb-3 nav-title mt-0 fs-6 fw-600"> Pages</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="pricing-plan.html"><span>Pricing Plan</span></a></li>
                                            <li><a class="dropdown-submenu" href="faq.html"><span>Faq</span></a></li>
                                            <li><a class="dropdown-submenu" href="coming-soon.html"><span>Coming Soon</span></a></li>
                                            <li><a class="dropdown-submenu" href="404-error.html"><span>Error 404</span></a></li>
                                            <li><a class="dropdown-submenu" href="no-result-found.html"><span>No Result Found</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <span class="mb-3 nav-title mt-0 fs-6 fw-600"> Authentication</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="sign-in.html"><span>Sign In</span></a></li>
                                            <li><a class="dropdown-submenu" href="sign-up.html"><span>Sign Up</span></a></li>
                                            <li><a class="dropdown-submenu" href="privacy-policy.html"><span>Privacy policy</span></a></li>
                                            <li><a class="dropdown-submenu" href="terms-and-conditions.html"><span>Terms And Conditions</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item mega-menu">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Portfolio<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <span class="mb-3 nav-title mt-0 fs-6 fw-600"> Portfolio Style</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="portfolio-agency.html"><span>Portfolio Agency</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-fancy.html"><span>Portfolio Fancy</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-morden.html"><span>Portfolio Morden</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-gallery-lightbox.html"><span>Photo Gallery</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 mt-3 mt-sm-0">
                                        <span class="mb-3 nav-title mt-0 fs-6 fw-600"> Portfolio Columns</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="portfolio-2-columns.html"><span>Portfolio 2 Columns</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-3-columns.html"><span>Portfolio 3 Columns</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-4-columns.html"><span>Portfolio 4 Columns</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-5-columns.html"><span>Portfolio 5 Columns</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <span class="mb-3 nav-title mt-0 fs-6 fw-600"> Portfolio Masonry</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="portfolio-2-masonry.html"><span>Portfolio 2 Masonry</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-3-masonry.html"><span>Portfolio 3 Masonry</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-4-masonry.html"><span>Portfolio 4 Masonry</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-5-masonry.html"><span>Portfolio 5 Masonry</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <span class="mb-3 nav-title mt-0 fs-6 fw-600"> Portfolio Single</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="portfolio-single-01.html"><span>Portfolio Single 01</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-single-02.html"><span>Portfolio Single 02</span></a></li>
                                            <li><a class="dropdown-submenu" href="portfolio-single-03.html"><span>Portfolio Single 03</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Destination<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="destination.html"><span>Destination</span></a></li>
                            <li><a class="dropdown-item" href="destinations-details.html"><span>Destinations Details</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Tour<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tour-search.html"><span>Tour Search</span></a></li>
                            <li><a class="dropdown-item" href="tour-list.html"><span>Tour List</span></a></li>
                            <li><a class="dropdown-item" href="tour-grid.html"><span>Tour Grid</span></a></li>
                            <li><a class="dropdown-item" href="tour-detail.html"><span>Tour Details</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Blog<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="blog-standard.html"><span>Blog Standard</span></a></li>
                            <li><a class="dropdown-item" href="blog-single.html"><span>Blog Single</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Shop<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="shop.html"><span>Shop</span></a></li>
                            <li><a class="dropdown-item" href="shop-list.html"><span>Shop List</span></a></li>
                            <li><a class="dropdown-item" href="shop-single.html"><span>Shop Single</span></a></li>
                            <li><a class="dropdown-item" href="shop-cart.html"><span>Shop Cart</span></a></li>
                            <li><a class="dropdown-item" href="shop-checkout.html"><span>Shop Checkout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="add-listing">
                <div class="woo-action">
                    <ul class="list-unstyled">
                        <li class="cart dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="cart-icon"><object type="image/svg+xml" data="{{ asset('EndUserAssets/images/cart.svg') }}" class="icon"></object></span>
                                <span class="cart-count">2</span></button>
                            <div class="dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <ul class="cart-list ps-0">
                                    <li class="d-flex">
                                        <a class="remove-item" href="#"><i class="fas fa-times"></i></a>
                                        <img class="img-fluid me-3" src="{{ asset('EndUserAssets/images/product/01.jpg') }}" alt="">
                                        <div class="cart-info">
                                            <a href="#">Extra Fine Wool Jumpers</a>
                                            <span class="d-block">1 x 12.49</span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <a class="remove-item" href="#"><i class="fas fa-times"></i></a>
                                        <img class="img-fluid me-3" src="{{ asset('EndUserAssets/images/product/02.jpg') }}" alt="">
                                        <div class="cart-info">
                                            <a href="#"> Men’s Standard Fit Crew T-Shirt</a>
                                            <span class="d-block">1 x 28.72</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="cart-footer">
                                    <div class="d-flex mb-3">
                                        <b class="me-auto text-dark">Subtotal:</b>
                                        <span>$41.21</span>
                                    </div>
                                    <div class="d-inline-block d-sm-flex">
                                        <a class="col btn btn-secondary btn-sm me-2 px-4" href="#">View Cart</a>
                                        <a class="col btn btn-sm btn-primary ms-0 mt-1 mt-sm-0 ms-sm-2 px-4" href="#">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nav-item header-search">
                    <div class="search">
                        <ul class="list-unstyled mb-0">
                            <li class="dropdown nav-item header-search search-icon">
                                <a href="#search">
                                    <svg version="1.1" id="Capa_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 487.95 487.95" style="enable-background:new 0 0 487.95 487.95;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M481.8,453l-140-140.1c27.6-33.1,44.2-75.4,44.2-121.6C386,85.9,299.5,0.2,193.1,0.2S0,86,0,191.4s86.5,191.1,192.9,191.1
                              c45.2,0,86.8-15.5,119.8-41.4l140.5,140.5c8.2,8.2,20.4,8.2,28.6,0C490,473.4,490,461.2,481.8,453z M41,191.4
                              c0-82.8,68.2-150.1,151.9-150.1s151.9,67.3,151.9,150.1s-68.2,150.1-151.9,150.1S41,274.1,41,191.4z"/>
                            </g>
                        </g>
                        </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--=================================
Header -->
