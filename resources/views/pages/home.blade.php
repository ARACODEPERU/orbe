@extends('layouts.webpage')

@section('content')
    <!-- Banner area start here -->
    <section class="banner-two">
        <div class="banner-two__shape-left d-none d-lg-block wow bounceInLeft" data-wow-duration="1s"
            data-wow-delay=".5s">
            <img src="themes/webpage/assets/images/shape/vape1.png" alt="shape">
        </div>
        <div class="banner-two__shape-right d-none d-lg-block wow bounceInRight" data-wow-duration="1s"
            data-wow-delay=".1s">
            <img class="sway_Y__animation " src="themes/webpage/assets/images/shape/vape2.png" alt="shape">
        </div>
        <div class="swiper banner-two__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="themes/webpage/assets/images/banner/banner-two-image1.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h4 data-animation="fadeInUp" data-delay="1s"><img src="themes/webpage/assets/images/icon/fire.svg"
                                    alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                            <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                for <span class="primary-color">vaping</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                with localized currencies languages, and <br> experie in
                                every
                                market. only a variety of vaping
                                products</p>
                            <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                <span class="mb-10">Starting Price</span>
                                <h3>$99.00</h3>
                            </div>
                            <div class="btn-wrp mt-65">
                                <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                    data-delay="1.8s"><span>Shop
                                        Now</span></a>
                                <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                    data-delay="1.9s"><span>View Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="themes/webpage/assets/images/banner/banner-two-image2.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h4 data-animation="fadeInUp" data-delay="1s"><img src="themes/webpage/assets/images/icon/fire.svg"
                                    alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                            <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                for <span class="primary-color">vaping</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                with localized currencies languages, and <br> experie in
                                every
                                market. only a variety of vaping
                                products</p>
                            <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                <span class="mb-10">Starting Price</span>
                                <h3>$99.00</h3>
                            </div>
                            <div class="btn-wrp mt-65">
                                <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                    data-delay="1.8s"><span>Shop
                                        Now</span></a>
                                <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                    data-delay="1.9s"><span>View
                                        Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="themes/webpage/assets/images/banner/banner-two-image3.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h4 data-animation="fadeInUp" data-delay="1s"><img src="themes/webpage/assets/images/icon/fire.svg"
                                    alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                            <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                for <span class="primary-color">vaping</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                with localized currencies languages, and <br> experie in
                                every
                                market. only a variety of vaping
                                products</p>
                            <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                <span class="mb-10">Starting Price</span>
                                <h3>$99.00</h3>
                            </div>
                            <div class="btn-wrp mt-65">
                                <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                    data-delay="1.8s"><span>Shop
                                        Now</span></a>
                                <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                    data-delay="1.9s"><span>View
                                        Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-two__arry-btn">
            <button class="arry-prev mb-15 banner-two__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
            <button class="arry-next active banner-two__arry-next"><i
                    class="fa-light fa-chevron-right"></i></button>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Category area start here -->
    <x-category />
    <!-- Category area end here -->

    <!-- View area start here -->
    <section class="view-area">
        <div class="bg-image view__bg" data-background="themes/webpage/assets/images/bg/view-bg.jpg"></div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".1s">
                    <div class="view__left-item">
                        <div class="image">
                            <img src="themes/webpage/assets/images/view/view-image1.jpg" alt="image">
                        </div>
                        <div class="view__left-content sub-bg">
                            <h2><a class="primary-hover" href="shop-single.html">The best e-liqued bundles</a>
                            </h2>
                            <p class="fw-600">Sell globally in minutes with localized currencies languages, and
                                experie
                                in every market. only a variety of vaping
                                products</p>
                            <a class="btn-two" href="shop-single.html"><span>Shop Now</span></a>
                            <a class="off-btn" href="#0"><img class="mr-10" src="themes/webpage/assets/images/icon/fire.svg"
                                    alt="icon"> GET
                                <span class="primary-color">25%
                                    OFF</span> NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="view__item mb-25 wow fadeInDown" data-wow-delay=".2s">
                        <div class="view__content">
                            <h3><a class="primary-hover" href="shop-single.html">new to vapeing?</a></h3>
                            <p>Whereas recognition of the inherent dignity</p>
                            <a class="btn-two" href="shop-single.html"><span>Shop Now</span></a>
                        </div>
                        <div class="view__image">
                            <img src="themes/webpage/assets/images/view/view-image2.jpg" alt="image">
                        </div>
                    </div>
                    <div class="view__item wow fadeInUp" data-wow-delay=".3s">
                        <div class="view__content">
                            <h3><a class="primary-hover" href="shop-single.html">Vap mode</a></h3>
                            <p>Whereas recognition of the inherent dignity</p>
                            <a class="btn-two" href="shop-single.html"><span>Shop Now</span></a>
                        </div>
                        <div class="view__image">
                            <img src="themes/webpage/assets/images/view/view-image3.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- View area end here -->

    <!-- Product area start here -->
    <x-products />
    <!-- Product area end here -->

    <!-- Discount area start here -->
    <section class="discount-area bg-image" data-background="{{ asset('themes/webpage/assets/images/bg/discount-bg2.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image mb-5 mb-lg-0"><img src="themes/webpage/assets/images/discount/discount-image2.png"
                            alt="image"></div>
                </div>
                <div class="col-lg-6">
                    <div class="discount__item ps-0 pb-5 pb-lg-0 ps-lg-5">
                        <div class="section-header">
                            <div class="section-title-icon wow fadeInUp" data-wow-delay=".1s">
                                <span class="title-icon mr-10"></span>
                                <h2>find your best favourite</h2>
                            </div>
                            <p class="mt-30 mb-55 wow fadeInUp" data-wow-delay=".2s">Sell globally in minutes with
                                localized currencies languages, and
                                <br>
                                experie in every
                                market. only a variety of vaping
                                products
                            </p>
                            <a class="btn-one wow fadeInUp" data-wow-delay=".3s" href="shop.html"><span>Shop
                                    Now</span></a>
                            <a class="off-btn wow fadeInUp" data-wow-delay=".4s" href="#0"><img class="mr-10"
                                    src="themes/webpage/assets/images/icon/fire.svg" alt="icon"> GET <span
                                    class="primary-color">25%
                                    OFF</span> NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount area end here -->

    <!-- Get now area start here -->
    <section class="get-now-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <h4 class="mb-30 wow fadeInUp" data-wow-delay=".1s"><img src="themes/webpage/assets/images/icon/fire.svg"
                            alt="icon">
                        GET <span class="primary-color">25% OFF</span> NOW</h4>
                    <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                        <span class="title-icon mr-10"></span>
                        <h2>latest arrival products</h2>
                    </div>
                    <div class="get-now__content">
                        <div class="get-info py-4 wow fadeInUp" data-wow-delay=".2s">
                            <del>$99.00</del> <span>$49.00</span>
                        </div>
                        <p class="fw-600 wow fadeInUp" data-wow-delay=".3s">There are many variations of passages of
                            Lorem Ipsum available, but <br>
                            the
                            majority have
                            suffered alteration in some form,
                            by injected humour, or randomised words which</p>
                        <ul class="pt-30 pb-30 bor-bottom wow fadeInUp" data-wow-delay=".3s">
                            <li>100% Natural</li>
                            <li>Coupon $61.99, Code: W2</li>
                            <li>30 Day Refund</li>
                        </ul>
                        <div class="time-up d-flex flex-wrap align-items-center gap-5 mt-30 wow fadeInUp"
                            data-wow-delay=".4s">
                            <div class="info">
                                <h4>HUNGRY UP !</h4>
                                <span>Offer end in :</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="get-time">
                                    <h3 id="day">00</h3>
                                    <span>Day</span>
                                </div>
                                <div class="get-time">
                                    <h3 id="hour">00</h3>
                                    <span>Hr</span>
                                </div>
                                <div class="get-time">
                                    <h3 id="min">00</h3>
                                    <span>Min</span>
                                </div>
                                <div class="get-time">
                                    <h3 id="sec">00</h3>
                                    <span>Sec</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="get-now__image mt-5 mt-xl-0">
                        <div class="get-bg-image">
                            <img src="themes/webpage/assets/images/shop/get-bg.png" alt="image">
                        </div>
                        <div class="swiper get__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="themes/webpage/assets/images/shop/get-image.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="themes/webpage/assets/images/shop/get-image2.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="get-now-arry get-now__arry-left">
                            <i class="fa-light fa-chevron-left"></i>
                        </button>
                        <button class="get-now-arry get-now__arry-right text-warning">
                            <i class="fa-light fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get now area end here -->

    <!-- Text slider area start here -->
    <div class="container">
        <div class="bor-top pb-40"></div>
    </div>
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    E-Cigarettes <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon"> <span>Vape Pens</span>
                    <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon">
                    Vape Juice <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon"> <span>E-Cigarettes</span>
                    <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon">
                    Vape Pens <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon"> <span>Vape Juice</span>
                    <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon">
                    E-Cigarettes <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon"> <span>Vape Pens</span>
                    <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon">
                    Vape Juice <img src="themes/webpage/assets/images/icon/title-left.svg" alt="icon"> <span>E-Cigarettes</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="bor-top pb-65"></div>
    </div>
    <!-- Text slider area end here -->

    <!-- Gallery area start here -->
    <section class="gallery-area">
        <div class="swiper gallery__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">50% <br>
                            off</div>
                        <div class="gallery__image image">
                            <img src="themes/webpage/assets/images/gallery/gallery-image1.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">best e-lequid</a></h3>
                            <p>Best E liquids from our huge collection</p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">50% <br>
                            off</div>
                        <div class="gallery__image image">
                            <img src="themes/webpage/assets/images/gallery/gallery-image2.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">best vape flavours</a></h3>
                            <p>Best E liquids from our huge collection</p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">50% <br>
                            off</div>
                        <div class="gallery__image image">
                            <img src="themes/webpage/assets/images/gallery/gallery-image3.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">Battery And Charger Kit</a></h3>
                            <p>Best E liquids from our huge collection</p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">50% <br>
                            off</div>
                        <div class="gallery__image image">
                            <img src="themes/webpage/assets/images/gallery/gallery-image4.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">best vape tanks</a></h3>
                            <p>Best E liquids from our huge collection</p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">50% <br>
                            off</div>
                        <div class="gallery__image image">
                            <img src="themes/webpage/assets/images/gallery/gallery-image5.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">POP Extra Strawberry</a></h3>
                            <p>Best E liquids from our huge collection</p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery area end here -->

    <!-- Brand area start here -->
    <x-brand />
    <!-- Brand area end here -->


@stop