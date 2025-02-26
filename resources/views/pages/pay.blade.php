@extends('layouts.webpage')

@section('content')

        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-130 pb-130" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">
                    Mi Carrito
                </h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="" class="primary-hover">
                        <i class="fa-solid fa-house me-1"></i> 
                            Home 
                        <i class="fa-regular text-white fa-angle-right"></i>
                    </a>
                    <span>Mi Carrito</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- cart page area start here -->
        <section class="cart-page pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="shopping-cart radius-10 bor sub-bg">
                            <div
                                class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                                <label class="product-details">Productos</label>
                                <label class="product-price">Precio</label>
                                <label class="product-quantity">Cantidad</label>
                                <label class="product-line-price">Total</label>
                                <label class="product-removal">Acción</label>
                            </div>
        
                            <div class="product p-4 bor-top bor-bottom d-flex justify-content-between align-items-center">
                                <div class="product-details d-flex align-items-center">
                                    <img src="themes/webpage/assets/images/shop/01.jpg" alt="image">
                                    <h4 class="ps-4 text-capitalize">NebulaVape</h4>
                                </div>
                                <div class="product-price">12.99</div>
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
        
                            <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                                <div class="product-details d-flex align-items-center">
                                    <img src="themes/webpage/assets/images/shop/02.jpg" alt="image">
                                    <h4 class="ps-4 text-capitalize">VaporRift</h4>
                                </div>
                                <div class="product-price">50.00</div>
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
                            <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                                <div class="product-details d-flex align-items-center">
                                    <img src="themes/webpage/assets/images/shop/03.jpg" alt="image">
                                    <h4 class="ps-4 text-capitalize">ZenithVapor</h4>
                                </div>
                                <div class="product-price">45.99</div>
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
                            <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                                <div class="product-details d-flex align-items-center">
                                    <img src="themes/webpage/assets/images/shop/04.jpg" alt="image">
                                    <h4 class="ps-4 text-capitalize">GravityGlide</h4>
                                </div>
                                <div class="product-price">99.99</div>
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
                            <div class="product p-4 d-flex justify-content-between align-items-center">
                                <div class="product-details d-flex align-items-center">
                                    <img src="themes/webpage/assets/images/shop/02.jpg" alt="image">
                                    <h4 class="ps-4 text-capitalize">VortexVape
                                    </h4>
                                </div>
                                <div class="product-price">25.98</div>
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
                                <div class="totals-item theme-color float-end mt-20">
                                    <span class="fw-bold text-uppercase py-2">cart total =</span>
                                    <div class="totals-value d-inline py-2 pe-2" id="cart-subtotal">399.97</div>
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
                                <div class="product-price">12.99</div>
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
                                <div class="product-price">50.00</div>
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
                                <div class="product-price">45.99</div>
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
                                <div class="product-price">99.99</div>
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
                                <div class="product-price">25.98</div>
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
                    <div class="col-md-3">
                        <div class="checkout__item-left sub-bg">
                            <h3 class="mb-40">Datos del comprador</h3>
                            <label class="mb-10" for="name">Tu nombre *</label>
                            <input class="mb-20" id="name" type="text">
                            <label class="mb-10" for="name">Teléfono *</label>
                            <input class="mb-20" id="phone" type="text">
                            <label class="mb-10" for="email">Correo electrónico*</label>
                            <input class="mb-20" id="email" type="email">
                            <label class="mb-10" for="companyName">Company Name (Optional)</label>
                            <input class="mb-20" id="companyName" type="text">
                            <h5 class="mb-10">Ciudad *</h5>
                            <select class="mb-20" name="subject">
                                <option value="">Ciudad 1</option>
                                <option value="">Ciudad 2</option>
                                <option value="">Ciudad 3</option>
                                <option value="">Ciudad 4</option>
                            </select>
                            <label class="mb-10" for="streetAddress">Dirección de entrega*</label>
                            <input class="mb-10" id="streetAddress" type="text">
                            <br>
                            <a style="width: 100%;" href="" class="btn-one" data-animation="fadeInUp" data-delay="1.8s" style="animation-delay: 1.8s;">
                                <span>Comprar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart page area end here -->

@stop