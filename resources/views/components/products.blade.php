<section class="product-area pt-20 pb-30 mt-100">
    <div class="container">
        <div
            class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
            <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                <span class="title-icon mr-10"></span>
                <h2>Nuevos Ingresos</h2>
            </div>
            {{-- <ul class="nav nav-pills mt-4 mt-xl-0">
                <li class="nav-item wow fadeInUp" data-wow-delay=".1s">
                    <a href="#latest-item" data-bs-toggle="tab" class="nav-link px-4 active">
                        últimos artículos
                    </a>
                </li>
                <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                    <a href="#top-ratting" data-bs-toggle="tab" class="nav-link px-4 bor-left bor-right">
                        top ratting
                    </a>
                </li>
                <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                    <a href="#featured-products" data-bs-toggle="tab" class="nav-link ps-4">
                        featured products
                    </a>
                </li>
            </ul> --}}
        </div>
        <div class="row g-4"> {{-- Elmer aqui tienen que cargar los ultimos 8 productos agregados --}}
            @foreach ($products as $product )
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="product__item bor">
                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                    <a href="{{ route('web_pro_description', $product->id) }}" class="product__image pt-20 d-block">
                        <img class="font-image" src="{{ $product->image }}"
                            alt="image">
                        <img class="back-image" src="{{ $product->image }}"
                            alt="image">
                    </a>
                    <div class="product__content">
                        <h4 class="mb-15">
                            <a class="primary-hover" href="{{ route('web_pro_description', $product->id) }}">
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
                    <br>
                    <a class="product__cart d-block bor-top" href="#0" onclick="agregarAlCarrito({ id: {{ $product->id }}, nombre: '{{ $product->name }}', precio: {{ $product->price }} })"><i
                            class="fa-regular fa-cart-shopping primary-color me-1"></i>
                        <span>Agregar al Carrito</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <div class="row g-4">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="text-align:center;">
                <a href="{{ route('web_products_with_category') }}" class="btn-one" data-animation="fadeInUp" data-delay="1.8s">
                    <span>Todos los productos</span>
                </a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
