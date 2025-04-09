@extends('layouts.webpage')

@section('content')

        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-130 pb-130" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">
                    Pagar
                </h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="" class="primary-hover">
                        <i class="fa-solid fa-house me-1"></i>
                            Home
                        <i class="fa-regular text-white fa-angle-right"></i>
                    </a>
                    <span>Pagar</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- cart page area start here -->
        <section class="cart-page pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="shopping-cart radius-10 bor sub-bg">
                            <div
                                class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                                <label class="product-details">Productos</label>
                                <label class="product-quantity">Cantidad</label>
                                <label class="product-line-price">Total</label>
                            </div>

                            @foreach ($products as $product)
                                <div class="product p-4 bor-top bor-bottom d-flex justify-content-between align-items-center">
                                    <div class="product-details d-flex align-items-center">
                                        <img src="{{ $product->image }}" alt="image">
                                        <h4 class="ps-4 text-capitalize">{{ $product->name }}</h4>
                                    </div>
                                    <div class="product-quantity" style="text-align: center;">
                                        <p>{{ $product->quantity }}</p>
                                    </div>
                                    <div class="product-line-price">S/ {{ $product->price*$product->quantity }}</div>
                                </div>
                            @endforeach

                            <div class="totals">
                                <div class="totals-item theme-color float-end mt-20">
                                    <span class="fw-bold text-uppercase py-2">cart total =</span>
                                    <div class="totals-value d-inline py-2 pe-2" id="cart-subtotal">{{ $total }}</div>
                                </div>
                            </div>

                        </div>
                        <!-- shopping-cart-mobile -->
                        <div class="shopping-cart mobile-view bor sub-bg">

                            <div class="product p-4 bor-top bor-bottom">
                                <div class="product-details d-flex align-items-center">
                                    <img src="{{ asset('themes/webpage/assets/images/shop/01.jpg') }}" alt="image">
                                    <h4 class="ps-4 text-capitalize">VortexVape</h4>
                                </div>
                                <div class="product-quantity">
                                    <input type="number" value="2" min="1">
                                </div>
                                <div class="product-line-price">25.98</div>
                                <div class="product-removal">
                                    <button class="remove-product">
                                        <i class="fa-solid fa-x heading-color"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="product p-4 bor-bottom">
                                <div class="product-details d-flex align-items-center">
                                    <img src="{{ asset('themes/webpage/assets/images/shop/02.jpg') }}" alt="image">
                                    <h4 class="ps-4 text-capitalize">EnigmaVapor</h4>
                                </div>
                                <div class="product-quantity">
                                    <input type="number" value="1" min="1">
                                </div>

                                <div class="product-line-price">50.00</div>
                                <div class="product-removal">
                                    <button class="remove-product">
                                        <i class="fa-solid fa-x heading-color"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product p-4 bor-bottom">
                                <div class="product-details d-flex align-items-center">
                                    <img src="{{ asset('themes/webpage/assets/images/shop/03.jpg') }}" alt="image">
                                    <h4 class="ps-4 text-capitalize">ZenithVapor</h4>
                                </div>
                                <div class="product-quantity">
                                    <input type="number" value="1" min="1">
                                </div>

                                <div class="product-line-price">45.99</div>
                                <div class="product-removal">
                                    <button class="remove-product">
                                        <i class="fa-solid fa-x heading-color"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product p-4 bor-bottom">
                                <div class="product-details d-flex align-items-center">
                                    <img src="{{ asset('themes/webpage/assets/images/shop/04.jpg') }}" alt="image">
                                    <h4 class="ps-4 text-capitalize">RadiantVape</h4>
                                </div>
                                <div class="product-quantity">
                                    <input type="number" value="2" min="1">
                                </div>
                                <div class="product-line-price">199.99</div>
                                <div class="product-removal">
                                    <button class="remove-product">
                                        <i class="fa-solid fa-x heading-color"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product p-4">
                                <div class="product-details d-flex align-items-center">
                                    <img src="{{ asset('themes/webpage/assets/images/shop/02.jpg') }}" alt="image">
                                    <h4 class="ps-4 text-capitalize">SerenitySmoke</h4>
                                </div>
                                <div class="product-quantity">
                                    <input type="number" value="1" min="1">
                                </div>
                                <div class="product-line-price">25.98</div>
                                <div class="product-removal">
                                    <button class="remove-product">
                                        <i class="fa-solid fa-x heading-color"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="totals">
                                <div class="totals-item theme-color float-end">
                                    <span class="fw-bold text-uppercase py-2">cart total =</span>
                                    <div class="totals-value d-inline py-2 pe-2">399.97</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="checkout__item-left sub-bg">
                            <h3 class="mb-10">Registra tu pago</h3>
                            <P>
                                Agradecemos su preferencia por nuestros productos. Por favor, proceda a registrar sus datos para confirmar la compra.
                            </P>

                        </div>
                        <br>
                        <div class="checkout__item-left sub-bg">
                            Aqui el formulario de mercado Pago

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart page area end here -->

@stop
