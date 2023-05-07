@extends('endUser.layouts.master')

@section('title')
    Ciyatrip
@endsection

@section('content')
    <!--=================================
    Search -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!--=================================
    Search -->
    <!--=================================
    Banner -->
    <section class="banner-02">
        <div id="main-slider" class="swiper-container">
            <div class="slider-social">
                <div class="container">
                    <div class="slider-social-info">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#"> <i class="fa-brands fa-dribbble"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
                            <li><span>Share</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide align-items-center d-flex slide-01 bg-overlay-black-2 header-position" style="background-image: url({{ asset($slider->image) }}); background-repeat: no-repeat; background-size: cover; background-position: center;">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-12 position-relative">
                                    <h1 class="text-white title text-uppercase" data-swiper-animation="fadeInUp" data-duration="1.0s" data-delay="1.0s">
                                        {{ $slider->title }}</h1>
                                    <p class="text-white" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="1.0s">
                                        {{ $slider->description }}</p>
                                    <a href="#" class="btn btn-primary" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="1.0s">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 position-relative text-center">
                        <div class="pagination-button">
                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fa-solid fa-arrow-left-long me-2"></i>Prev</div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">Next <i class="fa-solid fa-arrow-right-long ms-2"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Banner -->
    <!--=================================
    Destination Form -->
    <section class="py-5 bg-secondary home-search-02">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <form class="row g-3 home-search align-items-center justify-content-center">
                        <div class="col-sm-4 col-lg-2 col-md-4">
                            <div class="select-border text-start">
                                <select class="form-control  basic-select" aria-label="Default select example">
                                    <option selected>Destination</option>
                                    <option value="3">Italy</option>
                                    <option value="4">Germany</option>
                                    <option value="2">France</option>
                                    <option value="4">India</option>
                                    <option value="5">Bresil</option>
                                    <option value="6">Australia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2 col-md-4">
                            <div class="form-location datetimepickers">
                                <div class="input-group date " id="datetimepicker-01" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input border-right-0" placeholder="Depart Date" data-target="#datetimepicker-01">
                                    <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                        <div class="input-group-text body-color h-100"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2 col-md-4">
                            <div class="select-border text-start">
                                <select class="form-control basic-select form-select" aria-label="Default select example">
                                    <option selected>Travel Type</option>
                                    <option value="3">Adventure Travel</option>
                                    <option value="4">Luxury Travel</option>
                                    <option value="2">Family Travel</option>
                                    <option value="4">Solo Travel</option>
                                    <option value="5">Family Travel</option>
                                    <option value="6">Travel With Friends</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="align-self-center">
                                <div class="collapse show" id="price">
                                    <div class="property-price-slider">
                                        <input type="text" id="property-price-slider" name="example_name" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-4 d-grid">
                            <a class="btn btn-primary" href="#"> Search </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Destination Form -->
    <!--=================================
    Destination -->
    <section class="space-ptb perfect-tour bg-holder nav-arrow-top" style="background-image: url({{ asset('EndUserAssets/images/bg/03.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="sub-title ">
                            <img  class="img-fluid" src="{{ asset('EndUserAssets/images/title-icon.png') }}" alt="#">
                            <span>Beautiful places await</span>
                        </div>
                        <h2 class="title">Great Journeys <strong>Fascinating Places</strong></h2>
                        <p class="mb-0">Can the particular activity be done later? Defer it!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 position-relative">
                    <div class="slider">
                        <div class="owl-carousel owl-nav-bottom-center" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-xl-items="4" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1"  data-space="30" data-autoheight="true">
                            @foreach($tours as $tour)
                                <div class="item">
                                    <div class="listing-item">
                                        <div class="listing-image bg-overlay-half-bottom">
                                            <img class="img-fluid" src="{{ asset($tour->image) }}" alt="#">
                                            <div class="listing-favourite">
                                                <i class="fa-regular fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="listing-details">
                                            <div class="listing-title d-flex justify-content-between">
                                                <h5 class="mb-0"><a href="tour-detail.html" class="title mb-0">{{ $tour->country->name }}</a></h5>
                                                <div class="country-flags">
                                                    <img class="img-fluid shadow-sm" src="{{ asset($tour->country->image) }}" alt="#">
                                                </div>
                                            </div>
                                            <a href="#" class="listing-loaction"><i class="fa fa-location-dot"></i>  {{ $tour->location }}  </a>
                                            <div class="listing-rating d-flex justify-content-between">
                                                <div class="d-flex">
                                                    <div class="date me-3">
                                                        <i class="fa-regular fa-calendar-days me-2"></i><span> Days {{ $tour->number_of_days }} </span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa-solid fa-star me-1 text-yellow"></i><span>{{ $tour->rate }} / 5</span>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    @if($tour->discount != 0)
                                                        <span class="text-decoration-line-through">${{ $tour->price }}</span>
                                                    @endif
                                                        ${{ $tour->price - $tour->discount }}
                                                </div>
                                            </div>
                                            <div class="listing-info">
                                                <img class="img-fluid" src="{{ asset($tour->icon) }}" alt="">
                                                <p class="mb-0">{{ $tour->description }}</p>
                                            </div>
                                            <a href="tour-detail.html" class="btn btn-link">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Destination -->
    <!--=================================
    Destination -->
    <section>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-sm-4 col-xl-3">
                    <div class="destination-trips-item masonry-item">
                        <div class="trips-img">
                            <img class="img-fluid" src="{{ asset('EndUserAssets/images/destination/12.jpg') }}" alt="#">
                            <div class="trips-content">
                                <h4 class="mb-0"><a class="trips-title" href="tour-detail.html">Switzerland Snow Bord</a></h4>
                                <a class="trips-info" href="#">30 Trips</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-xl-6">
                    <div class="row g-0">
                        <div class="col-sm-5">
                            <div class="destination-trips-item masonry-item">
                                <div class="trips-img">
                                    <img class="img-fluid" src="{{ asset('EndUserAssets/images/destination/08.jpg') }}" alt="#">
                                    <div class="trips-content">
                                        <h4 class="mb-0"><a class="trips-title" href="tour-detail.html">Tracking</a></h4>
                                        <a class="trips-info" href="#">25 Trips</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="destination-trips-item masonry-item">
                                <div class="trips-img">
                                    <img class="img-fluid" src="{{ asset('EndUserAssets/images/destination/09.jpg') }}" alt="#">
                                    <div class="trips-content">
                                        <h4 class="mb-0"><a class="trips-title" href="tour-detail.html">Scuba Diving</a></h4>
                                        <a class="trips-info" href="#">40 Trips</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-sm-7">
                            <div class="destination-trips-item masonry-item">
                                <div class="trips-img">
                                    <img class="img-fluid" src="{{ asset('EndUserAssets/images/destination/10.jpg') }}" alt="#">
                                    <div class="trips-content">
                                        <h4 class="mb-0"><a class="trips-title" href="tour-detail.html">Tracking</a></h4>
                                        <a class="trips-info" href="#">25 Trips</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="destination-trips-item masonry-item">
                                <div class="trips-img">
                                    <img class="img-fluid" src="{{ asset('EndUserAssets/images/destination/11.jpg') }}" alt="#">
                                    <div class="trips-content">
                                        <h4 class="mb-0"><a class="trips-title" href="tour-detail.html">Balloon marrakech</a></h4>
                                        <a class="trips-info" href="#">28 Trips</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="upcomming-plan h-100 bg-holder" style="background-image: url({{ asset('EndUserAssets/images/blog/06.jpg') }});">
                        <div class="upcomming h-100">
                            <div class="upcomming-info text-center h-100 d-flex justify-content-center">
                                <div class="align-self-center">
                                    <img class="img-fluid" src="{{ asset('EndUserAssets/images/logo-dark.svg') }}" alt="#">
                                    <h3 class="fw-bold my-4">Upcoming Holiday Tour Plan</h3>
                                    <div class="countdown-2">
                                        <div class="countdown">
                                            <span class="theme-color days">00</span>
                                            <p class="days_ref">Days</p>
                                        </div>
                                        <div class="countdown">
                                            <span class="theme-color hours">00</span>
                                            <p class="hours_ref">Hours</p>
                                        </div>
                                        <div class="countdown">
                                            <span class="theme-color minutes">00</span>
                                            <p class="minutes_ref">Minutes</p>
                                        </div>
                                        <div class="countdown">
                                            <span class="theme-color seconds">00</span>
                                            <p class="seconds_ref">Seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Destination -->
    <!--=================================
    client -->
    <section class="client-logo">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="owl-carousel owl-nav-bottom-center" data-nav-dots="false" data-nav-arrow="false" data-items="6" data-lg-items="4" data-md-items="2" data-sm-items="1"  data-space="30" data-autoheight="true">
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/client-logo/01.png') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/client-logo/02.png') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/client-logo/03.png') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/client-logo/04.png') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/client-logo/05.png') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/client-logo/06.png') }}" alt="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    client -->
    <!--=================================
    Testimonial -->
    <section class="bg-secondary position-relative">
        <div class="map-bg-img" style="background-image: url({{ asset('EndUserAssets/images/bg/map.png') }}); background-position: center right; background-repeat: no-repeat;"></div>
        <div class="container ">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-5 position-absolute start-0 top-0 h-100 p-0 d-none d-lg-block">
                    <div class="bg-holder h-100 w-100" style="background-image: url({{ asset('EndUserAssets/images/bg/04.jpg') }}"></div>
                </div>
                <div class="col-md-12 col-lg-7 justify-content-start">
                    <div class="space-ptb">
                        <div class="section-title position-relative ps-0 ps-lg-3">
                            <div class="sub-title"><img  class="img-fluid" src="{{ asset('EndUserAssets/images/title-icon.png') }}" alt="#"><span class="text-white">Testimonial</span></div>
                            <h2 class="title text-white">What Our Happy <strong>Clients say about us</strong></h2>
                            <div class="description">
                                <p class="text-white">Figure out what you want, put a plan together to achieve it, understand the cost, believe in yourself then go and get it!</p>
                            </div>
                        </div>
                        <div class="owl-carousel owl-nav-bottom-center ps-0 ps-lg-3" data-nav-dots="true" data-nav-arrow="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1"  data-space="30" data-autoheight="true">
                            <div class="item">
                                <div class="testimonial">
                                    <div class="testimonial-star-icon">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-quote-icon">
                                        <img class="img-fluid" src="{{ asset('EndUserAssets/images/testimonial/quote.svg') }}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="mb-0 text-white"><i>I love Potenza. I have gotten at least 50 times the value from Potenza. I STRONGLY recommend Potenza to EVERYONE interested in running a successful online business!</i> </p>
                                    </div>
                                    <div class="testimonial-author d-flex align-items-center">
                                        <div class="testimonial-avatar avatar">
                                            <img class="img-fluid rounded-circle" src="{{ asset('EndUserAssets/images/avatar/01.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-name d-flex align-items-center">
                                            <h6 class="text-white author-tittle">Alice Williams</h6>
                                            <span class="text-white">Services</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <div class="testimonial-star-icon">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-quote-icon">
                                        <img class="img-fluid" src="{{ asset('EndUserAssets/images/testimonial/quote.svg') }}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="mb-0 text-white"><i>I would gladly pay over 600 dollars for Potenza. Since I invested in Potenza I made over 100,000 dollars profits. Your company is truly upstanding and is behind its product 100%.</i> </p>
                                    </div>
                                    <div class="testimonial-author d-flex align-items-center">
                                        <div class="testimonial-avatar avatar">
                                            <img class="img-fluid rounded-circle" src="{{ asset('EndUserAssets/images/avatar/02.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-name d-flex align-items-center">
                                            <h6 class="text-white author-tittle">Harry Russell</h6>
                                            <span class="text-white">Advisors</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <div class="testimonial-star-icon">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-quote-icon">
                                        <img class="img-fluid" src="{{ asset('EndUserAssets/images/testimonial/quote.svg') }}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="mb-0 text-white"><i>I love your system. Nice work on your Potenza. Great job, I will definitely be ordering again! I would like to personally thank you for your outstanding product.</i> </p>
                                    </div>
                                    <div class="testimonial-author d-flex align-items-center">
                                        <div class="testimonial-avatar avatar">
                                            <img class="img-fluid rounded-circle" src="{{ asset('EndUserAssets/images/avatar/03.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-name d-flex align-items-center">
                                            <h6 class="text-white author-tittle">Paul Flavius</h6>
                                            <span class="text-white">Finance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Testimonial -->
    <!--=================================
    Feature Categories -->
    <section class="space-ptb" style="background-image: url({{ asset('EndUserAssets/images/bg/map-bg.png') }}); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="section-title text-center mb-5">
                        <div class="sub-title justify-content-center">
                            <img class="img-fluid" src="{{ asset('EndUserAssets/images/title-icon.png') }}" alt="">
                            <span>Don't Be A Tourist, Be A Traveler</span>
                        </div>
                        <h2 class="title">Choose <strong>Your Tour</strong></h2>
                        <p class="mb-0">Figure out what you want, put a plan together to achieve it, understand the cost, believe in yourself then go and get it!</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach($travelTypes as $travelType)
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="feature-categories">
                            <div class="icon">
                                <object type="image/svg+xml" data="{{ asset($travelType->svg) }}" class="icon "></object>
                            </div>
                            <h6 class="mb-0 title"><a href="#"> {{ $travelType->type }} </a></h6>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-nav-center feature-categories-2" data-nav-dots="false" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1"  data-space="0" data-autoheight="true">
                        @foreach($tours as $tour)
                            <div class="item">
                                <div class="listing-item listing-item-2">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="{{ asset($tour->image) }}" alt="#">
                                        <div class="listing-favourite">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="listing-details">
                                        <div class="listing-title d-flex justify-content-between">
                                            <h5 class="mb-0"><a href="tour-detail.html" class="title mb-0">{{ $tour->country->name }}</a></h5>
                                            <div class="country-flags">
                                                <img class="img-fluid shadow-sm" src="{{ asset($tour->country->image) }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="price">
                                            @if($tour->discount != 0)
                                                <span class="text-decoration-line-through">${{ $tour->price }}</span>
                                            @endif
                                            ${{ $tour->price - $tour->discount }}
                                        </div>
                                        <div class="listing-info">
                                            <img class="img-fluid" src="{{ asset($tour->icon) }}" alt="">
                                            <p class="mb-0">{{ $tour->description }}</p>
                                        </div>
                                        <div class="listing-rating d-flex justify-content-between">
                                            <div class="d-flex">
                                                <div class="date me-3">
                                                    <i class="fa-regular fa-calendar-days me-2"></i><span> Days {{ $tour->number_of_days }} </span>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa-solid fa-star me-1 text-yellow"></i><span>{{ $tour->rate }} / 5</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="listing-loaction"><i class="fa fa-location-dot"></i> {{ $tour->location }} </a>
                                        <a href="tour-detail.html" class="btn btn-link d-flex">See Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Feature Categories -->
    <!--=================================
    instagram -->
    <section class="">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-2 col-lg-3">
                    <div class="instagram text-center bg-primary h-100 d-flex p-5 p-lg-4 align-items-center justify-content-center">
                        <div class="instagram-icon">
                            <i class="fa-brands fa-instagram text-white"></i>
                            <h6 class="text-white fw-medium mb-2 mt-3">Find us in the wild</h6>
                            <a class="text-white fw-bold" href="#">@Ciyatrip</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-9 h-100">
                    <div class="owl-carousel " data-nav-dots="false" data-nav-arrow="false" data-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2"  data-space="0" data-autoheight="true">
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/instagram/01.jpg') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/instagram/02.jpg') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/instagram/03.jpg') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/instagram/04.jpg') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/instagram/05.jpg') }}" alt="#"></a>
                        </div>
                        <div class="item text-center">
                            <a href="#"><img class="img-fluid" src="{{ asset('EndUserAssets/images/instagram/06.jpg') }}" alt="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    instagram -->
@endsection
