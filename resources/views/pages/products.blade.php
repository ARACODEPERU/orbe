@extends('layouts.webpage')

@section('content')

<!-- Page banner area start here -->
<section class="page-banner bg-image pt-130 pb-130" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Título de Categoria</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="{{ route('index_main') }}" class="primary-hover">
                <i class="fa-solid fa-house me-1"></i> 
                    Home 
                <i class="fa-regular text-white fa-angle-right"></i>
            </a>
            <span>Título de Categoria</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Product area start here -->
<section class="product-area pt-130 pb-130">
    <div class="container">
        <div class="pb-20 bor-bottom shop-page-wrp d-flex justify-content-between align-items-center mb-65">
            <p class="fw-600">Mostrando 1–12 de 17 resultados</p>
            <div class="short">
                <select name="shortList" id="shortList">
                    <option value="0">Todos</option>
                    <option value="">Sub-categoria-1</option>
                    <option value="">Sub-categoria-2</option>
                    <option value="">Sub-categoria-3</option>
                </select>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-12">
                <div class="row g-4"> 
                    {{-- QUE CARGUEN 20 PRODUCTOS Y LUEGO LA PAGINACIÓN --}}
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="product__item bor">
                            <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                            <a href="shop-single.html" class="product__image pt-20 d-block">
                                <img class="font-image" src="themes/webpage/assets/images/product/product-image1.png"
                                    alt="image">
                                <img class="back-image" src="themes/webpage/assets/images/product/product-image3.png"
                                    alt="image">
                            </a>
                            <div class="product__content">
                                <h4 class="mb-15">
                                    <a class="primary-hover" href="shop-single.html">
                                        Título del producto
                                    </a>
                                </h4>
                                <del>S/ 74.50</del><span class="primary-color ml-10">S/ 49.50</span>
                                {{-- <div class="star mt-20">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div> --}}
                            </div>
                            <a class="product__cart d-block bor-top" href="#0">
                                <i class="fa-regular fa-cart-shopping primary-color me-1"></i> 
                                <span>Agregar al carrito</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pagi-wrp mt-65">
                    <a href="#0" class="pagi-btn">01</a>
                    <a href="#0" class="pagi-btn active">02</a>
                    <a href="#0" class="pagi-btn ">03</a>
                    <a href="#0" class="fa-regular ms-2 primary-hover fa-angle-right"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product area end here -->

@stop