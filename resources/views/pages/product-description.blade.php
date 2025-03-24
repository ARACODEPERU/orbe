@extends('layouts.webpage')

@section('content')

        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-80 pb-80" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">
                    {{ $product->name }}
                </h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="" class="primary-hover">
                        <i class="fa-solid fa-house me-1"></i>
                        Home <i class="fa-regular text-white fa-angle-right"></i>
                    </a>
                    <a href="" class="primary-hover">
                        Categorias
                        <i class="fa-regular text-white fa-angle-right"></i>
                    </a>
                    <span>{{ $product->name }}</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Shop single area start here -->
        <section class="shop-single pt-130 pb-130">
            <div class="container">
                <!-- product-details area start here -->
                <div class="product-details-single pb-40">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="image img">
                                <div class="swiper shop-single-slide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{$product->image}}" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('themes/webpage/assets/images/shop/02.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('themes/webpage/assets/images/shop/03.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('themes/webpage/assets/images/shop/04.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 swiper shop-slider-thumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ $product->image }}" alt="image">
                                        </div>
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ asset('themes/webpage/assets/images/shop/02.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ asset('themes/webpage/assets/images/shop/03.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ asset('themes/webpage/assets/images/shop/04.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content h24">
                                <h3 class="pb-2 primary-color">{{$product->name}}</h3>
                                {{-- <div class="star primary-color pb-2">
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star-half-stroke sm-font"></i></span>
                                </div> --}}
                                <h2 class="pb-3"><del>S/ {{ $product->price+($product->price*0.2) }}</del>&nbsp; S/ {{$product->price}}</h2>
                                {{-- <h4 class="pb-2 primary-color">Descripción</h4> --}}
                                <p class="text-justify mb-10">
                                    {!!$product->description!!}
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="details-area">
                                        <div class="category flex-wrap mt-4 d-flex py-3 bor-top bor-bottom">
                                            <h4 class="pe-3">Categories :</h4>
                                            <a href="#0" class="primary-hover">Woman</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Man</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Kids</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Accessories</a>
                                        </div>
                                        <div class="d-flex flex-wrap py-3 bor-bottom">
                                            <h4 class="pe-3">Tags :</h4>
                                            <a href="#0" class="primary-hover">Fashion</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Lifestyle</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Travel</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Video</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Audio</a>
                                        </div>
                                        {{-- <div class="d-flex flex-wrap align-items-center py-3 bor-bottom">
                                            <h4 class="pe-3">Share:</h4>
                                            <div class="social-media">
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-pinterest-p"></i></a>
                                            </div>
                                        </div> --}}
                                        <div class="cart-wrp py-4">
                                            <div class="cart-quantity">
                                                <form id='myform' method='POST' class='quantity' action='#'>
                                                    <input type='button' value='-' class='qtyminus minus'>
                                                    <input type='text' name='quantity' value='0' class='qty'>
                                                    <input type='button' value='+' class='qtyplus plus'>
                                                </form>
                                            </div>
                                        </div>
                                        <a href="#0" class="d-block text-center btn-two mt-40">
                                            <span>
                                                <i class="fa-solid fa-basket-shopping pe-2"></i>
                                                Agregar al Carrito
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-details area end here -->

                <!-- description review area start here -->
                <div class="shop-singe-tab">
                    <ul class="nav nav-pills mb-4 bor-top bor-bottom py-2">
                        <li class="nav-item">
                            <a href="#descripcion" data-bs-toggle="tab" class="nav-link ps-0 pe-3 active">
                                <h4 class="text-uppercase">Descripción</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#ficha" data-bs-toggle="tab" class="nav-link ps-0 pe-3">
                                <h4 class="text-uppercase">Ficha Tecnica</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#manual" data-bs-toggle="tab" class="nav-link ps-0 pe-3">
                                <h4 class="text-uppercase">Manual</h4>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="descripcion" class="tab-pane fade show active">
                            <p class="pb-4 text-justify">
                                Contenido de la descripcon
                            </p>
                        </div>
                        <div id="ficha" class="tab-pane fade show">
                            <p class="pb-4 text-justify">
                                Proactively disseminate impactful mindshare without technically
                                sound web
                                services.
                                Distiively harness
                                compelling
                                innovation before high payoff testing procedures. Uniquely fashion customized web
                                services
                                with cross
                                functional
                                internal or "organic" sources. Uniquely restore error-free e-commerce via
                                multidisciplinary
                                antailers.
                                Completely whiteboard user friendly quality vectors rather than synergistic technologi
                                Professionally
                                evisculate
                                enterprise wide metrics without resource maximizing interfaces. Synergistically
                                benchmark
                                enterprise-wide e-tailers
                                through optimal paradigms. Phosfluorescently foster cutting-edge was and benefits
                                without
                                magnetic
                            </p>
                            <p class="pb-4 text-justify">Completely build emerging ideas through covalent applications.
                                Distinctively
                                synthesize user
                                friendly
                                collaboration and
                                idsharing with superior content. Energistically incentivize user friendly models rather
                                than
                                timely
                                convergence.
                                Objectively disintermediate high standards in paradigms before state the art process
                                improvements.
                                Interactively
                                orchestrate plug-and-play human capital whereas customer directed initiatives.</p>
                        </div>
                        <div id="manual" class="tab-pane fade show">
                            <p class="pb-4 text-justify">Proactively disseminate impactful mindshare without technically
                                sound web
                                services.
                                Distiively harness
                                compelling
                                innovation before high payoff testing procedures. Uniquely fashion customized web
                                services
                                with cross
                                functional
                                internal or "organic" sources. Uniquely restore error-free e-commerce via
                                multidisciplinary
                                antailers.
                                Completely whiteboard user friendly quality vectors rather than synergistic technologi
                                Professionally
                                evisculate
                                enterprise wide metrics without resource maximizing interfaces. Synergistically
                                benchmark
                                enterprise-wide e-tailers
                                through optimal paradigms. Phosfluorescently foster cutting-edge was and benefits
                                without
                                magnetic</p>
                            <p class="pb-4 text-justify">Completely build emerging ideas through covalent applications.
                                Distinctively
                                synthesize user
                                friendly
                                collaboration and
                                idsharing with superior content. Energistically incentivize user friendly models rather
                                than
                                timely
                                convergence.
                                Objectively disintermediate high standards in paradigms before state the art process
                                improvements.
                                Interactively
                                orchestrate plug-and-play human capital whereas customer directed initiatives.</p>
                            <p class="text-justify">Intrinsicly provide access to team driven information without
                                adaptive content.
                                Collaboratively embrace
                                reliable supply
                                chains via extensible benefits. Enthusiastically visualize accurate human capital before
                                backend
                                meta-services.
                                Continually reinvent interdependent schemas through mission-critical benefits.
                                Competently
                                leverage
                                existing parallel
                                action items through end-to-end "outside the box" thinking.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- description review area end here -->
        </section>
        <!-- Shop single area end here -->


@stop
