@extends('layouts.webpage')

@section('content')

    <!-- Page banner area start here -->
    <section class="page-banner bg-image pt-80 pb-80" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
        <div class="container">
            <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Categorias</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                <a href="{{ route('index_main') }}" class="primary-hover">
                    <i class="fa-solid fa-house me-1"></i> 
                        Home 
                    <i class="fa-regular text-white fa-angle-right"></i>
                </a>
                <span>Categorias</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Categories area start here -->
    <section class="pt-40 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="swiper-slide" style="padding: 15px 0px;">
                        <div class="category__item category-two__item text-center">
                            <a href="shop.html" class="category__image d-block">
                                <img src="{{ asset('themes/webpage/assets/images/category/category-image1.png') }}" alt="image">
                                <div class="category-icon">
                                    <img src="{{ asset('themes/webpage/assets/images/category/category-icon1.png') }}" alt="icon">
                                </div>
                            </a>
                            <h4 class="mt-30"><a href="">Categoria 01</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="swiper-slide" style="padding: 15px 0px;">
                        <div class="category__item category-two__item text-center">
                            <a href="shop.html" class="category__image d-block">
                                <img src="{{ asset('themes/webpage/assets/images/category/category-image1.png') }}" alt="image">
                                <div class="category-icon">
                                    <img src="{{ asset('themes/webpage/assets/images/category/category-icon1.png') }}" alt="icon">
                                </div>
                            </a>
                            <h4 class="mt-30"><a href="">Categoria 02</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="swiper-slide" style="padding: 15px 0px;">
                        <div class="category__item category-two__item text-center">
                            <a href="shop.html" class="category__image d-block">
                                <img src="{{ asset('themes/webpage/assets/images/category/category-image1.png') }}" alt="image">
                                <div class="category-icon">
                                    <img src="{{ asset('themes/webpage/assets/images/category/category-icon1.png') }}" alt="icon">
                                </div>
                            </a>
                            <h4 class="mt-30"><a href="">Categoria 03</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="swiper-slide" style="padding: 15px 0px;">
                        <div class="category__item category-two__item text-center">
                            <a href="shop.html" class="category__image d-block">
                                <img src="{{ asset('themes/webpage/assets/images/category/category-image1.png') }}" alt="image">
                                <div class="category-icon">
                                    <img src="{{ asset('themes/webpage/assets/images/category/category-icon1.png') }}" alt="icon">
                                </div>
                            </a>
                            <h4 class="mt-30"><a href="">Categoria 04</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="swiper-slide" style="padding: 15px 0px;">
                        <div class="category__item category-two__item text-center">
                            <a href="shop.html" class="category__image d-block">
                                <img src="{{ asset('themes/webpage/assets/images/category/category-image1.png') }}" alt="image">
                                <div class="category-icon">
                                    <img src="{{ asset('themes/webpage/assets/images/category/category-icon1.png') }}" alt="icon">
                                </div>
                            </a>
                            <h4 class="mt-30"><a href="">Categoria 05</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories area end here -->

@stop