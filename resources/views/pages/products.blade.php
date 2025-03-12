@extends('layouts.webpage')

@section('content')

<!-- Page banner area start here -->
<section class="page-banner bg-image pt-80 pb-80" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
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
            <p class="fw-600">Mostrando del producto {{ $products->firstItem() }} al {{ $products->lastItem() }} de {{ $count }} en Total</p>
            <div class="short">
                        <select name="category_id" id="shortList">
                            <option value="0">Todos</option>
                            @foreach ($categories as $key => $category)
                                <option value="{{ $category->id }}"><a href="{{ route('web_products_with_category', $category->id) }}">{{ $category->description }}</a></option>
                            @endforeach
                        </select>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-12">
                <div class="row g-4">
                    {{-- QUE CARGUEN 20 PRODUCTOS Y LUEGO LA PAGINACIÓN --}}
                    @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="product__item bor">
                            <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                            <a href="shop-single.html" class="product__image pt-20 d-block">
                                <img class="font-image" src="{{ $product->image }}"
                                    alt="image">
                                <img class="back-image" src="{{ $product->image }}"
                                    alt="image">
                            </a>
                            <div class="product__content">
                                <h4 class="mb-15">
                                    <a class="primary-hover" href="shop-single.html">
                                        {{ $product->name }}
                                    </a>
                                </h4>
                                <del>S/ {{ $product->price+($product->price*0.2) }}</del><span class="primary-color ml-10">S/ {{ $product->price }}</span>
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
                    @endforeach
                    {{-- {{ $products->links() }} --}}
                    {{ $products->links('paginator.custom_1', ['products' =>$products]) }}
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Product area end here -->

@stop
