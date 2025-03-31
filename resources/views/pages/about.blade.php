@extends('layouts.webpage')

@section('content')

<!-- Page banner area start here -->
<section class="page-banner bg-image pt-80 pb-80" data-background="themes/webpage/assets/images/banner/inner-banner.jpg">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Sobre Nosotros</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="{{ route('index_main') }}" class="primary-hover">
                <i class="fa-solid fa-house me-1"></i> Home 
                <i class="fa-regular text-white fa-angle-right"></i>
            </a>
            <span>Sobre Nosotros</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- About area start here -->
<section class="discount-area about-area pt-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="image position-relative">
                    <img class="radius-10" src="themes/webpage/assets/images/about/about-image.jpg" alt="image">
                    <div class="video__btn-wrp">
                        <div class="video-btn video-pulse">
                            <a class="video-popup secondary-bg"
                                href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"><i
                                    class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discount__item pl-30">
                    <div class="section-header">
                        <div class="section-title-icon">
                            <span class="title-icon mr-10"></span>
                            <h2>We Are Here To Increase Your Modern Life</h2>
                        </div>
                        <p class="mt-30 mb-55">Sell globally in minutes with localized currencies languages, and
                            <br>
                            experie in every
                            market. only a variety of vaping
                            products globally in with localized currencies languages globally in
                            with localized currencies languages Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Neque exercitationem perspiciatis rem sed ipsum assumenda nemo
                            praesentium blanditiis tempora consequuntur cum beatae saepe facere quis dolore
                            dignissimos nihil.
                        </p>
                        <a class="btn-one" href="contact.html"><span>More About us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area end here -->

<!-- Service area start here -->
<section class="service-area pt-130 pb-130 bg-image" data-background="themes/webpage/assets/images/bg/about-bg.jpg">
    <div class="container">
        <div class="row g-4 align-items-center justify-content-center justify-content-lg-start">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service__item mb-50">
                    <div class="service__icon">
                        <img src="themes/webpage/assets/images/icon/feature-icon1.png" alt="icon">
                    </div>
                    <div class="service__content">
                        <h4>Free delivery</h4>
                        <p>For all orders above $45</p>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__icon">
                        <img src="themes/webpage/assets/images/icon/feature-icon2.png" alt="icon">
                    </div>
                    <div class="service__content">
                        <h4>Secure payments</h4>
                        <p>Confidence on all your devices</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4 d-none d-lg-block">
                <div class="service__image image">
                    <img src="themes/webpage/assets/images/service/service-image.png" alt="image">
                    <div class="section-header service-header d-flex align-items-center">
                        <span class="title-icon mr-10"></span>
                        <h2>sign up & save 25%</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service__item mb-50">
                    <div class="service__icon">
                        <img src="themes/webpage/assets/images/icon/feature-icon3.png" alt="icon">
                    </div>
                    <div class="service__content">
                        <h4>Top-notch support</h4>
                        <p>sayhello&gazacom</p>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__icon">
                        <img src="themes/webpage/assets/images/icon/feature-icon4.png" alt="icon">
                    </div>
                    <div class="service__content">
                        <h4>180 Days Return</h4>
                        <p>money back guranry</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service area end here -->

<!-- Testimonial area start here -->
<x-testimonial />
<!-- Testimonial area end here -->

<!-- Blog area start here -->
{{-- <section class="blog pt-130 pb-130 sub-bg">
    <div class="container">
        <div class="blog__head-wrp mb-65">
            <div class="section-header d-flex align-items-center">
                <span class="title-icon mr-10"></span>
                <h2>our latest blog</h2>
            </div>
            <a href="blog.html" class="btn-two primary-hover mt-4 mt-md-0"><span>view all blog</span></a>
        </div>
        <div class="row g-4">
            <div class="col-xl-8">
                <div class="blog__item-left">
                    <div class="swiper blog__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="blog__item-left-content">
                                            <span class="blog__tag">vapers</span>
                                            <h3><a href="blog-single.html">roup of young volunteers
                                                    park. they are vapeing</a></h3>
                                            <p>vapers planting is the act of planting young vaperss, shrubs, or
                                                other woody
                                                plants into the
                                                ground to establish new
                                                vapes.</p>
                                            <span class="blog__item-left-content-info">By <strong
                                                    class="me-3">Max
                                                    Trewhitt</strong> 2
                                                weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image">
                                            <img class="radius-10" src="themes/webpage/assets/images/blog/blog-image1.png"
                                                alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="blog__item-left-content">
                                            <span class="blog__tag">vapers</span>
                                            <h3><a href="blog-single.html">roup of young volunteers
                                                    park. they are vapeing</a></h3>
                                            <p>vapers planting is the act of planting young vaperss, shrubs, or
                                                other woody
                                                plants into the
                                                ground to establish new
                                                vapes.</p>
                                            <span class="blog__item-left-content-info">By <strong>Max
                                                    Trewhitt</strong> 2
                                                weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image">
                                            <img class="radius-10" src="themes/webpage/assets/images/blog/blog-image2.png"
                                                alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="blog__item-left-content">
                                            <span class="blog__tag">vapers</span>
                                            <h3><a href="blog-single.html">roup of young volunteers
                                                    park. they are vapeing</a></h3>
                                            <p>vapers planting is the act of planting young vaperss, shrubs, or
                                                other woody
                                                plants into the
                                                ground to establish new
                                                vapes.</p>
                                            <span class="blog__item-left-content-info">By <strong>Max
                                                    Trewhitt</strong> 2
                                                weeks ago</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image">
                                            <img class="radius-10" src="themes/webpage/assets/images/blog/blog-image3.png"
                                                alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__item-left-dot-wrp">
                        <div class="dot blog__dot"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-block d-md-none d-xl-block">
                <div class="blog__item-right">
                    <a href="blog-single.html" class="image d-block">
                        <img class="radius-10" src="themes/webpage/assets/images/blog/blog-image-sm.png" alt="image">
                    </a>
                    <h3><a href="blog-single.html">Close up picture of the sapling of the vape is</a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="blog__tag">vapers</span>
                        <span>2 weeks ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Blog area end here -->

<!-- Brand area start here -->
<x-brand />
<!-- Brand area end here -->

<!-- Footer area start here -->
<x-footer />
<!-- Footer area end here -->

@stop