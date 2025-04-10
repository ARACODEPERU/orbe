@extends('layouts.webpage')

@section('content')
<script src="https://sdk.mercadopago.com/js/v2"></script>
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
                                {{ $names }} agradecemos su preferencia por nuestros productos. Por favor, procede a registrar tus datos para confirmar tu compra.
                            </P>

                        </div>
                        <br>
                        <div class="checkout__item-left sub-bg">
                            <div id="cardPaymentBrick_container"></div>
                            <form action="" method="post">
                                <div hidden>
                                    @foreach ($product_id as $k => $item)
                                        <input type="hidden" name="product_id[]" value="{{ $product_id[$k] }}">
                                        <input id="p_q_{{ $products[$k]->id }}" type="hidden" name="product_quantity[]" value="{{ $product_quantity[$k] }}">
                                        <input type="hidden" name="product_price[]" value="{{ $products[$k]->price }}">
                                        <input type="hidden" name="product_name[]" value="{{ $products[$k]->name }}">
                                    @endforeach
                                </div>
                                <input type="email" name="" id="">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart page area end here -->
        <!-- cart page content section end -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @if ($preference)
        <script>
            const mp = new MercadoPago("{{ env('MERCADOPAGO_KEY') }}", {
                locale: 'es-PE'
            });
            const bricksBuilder = mp.bricks();
            const renderCardPaymentBrick = async (bricksBuilder) => {
                const settings = {
                    initialization: {
                        preferenceId: "{{ $preference }}",
                        amount: {{ $total }},
                    },
                    customization: {
                        visual: {
                            style: {
                                customVariables: {
                                    theme: 'bootstrap',
                                    formBackgroundColor: '#333333',
                                    inputBackgroundColor: '#222222',
                                    textPrimaryColor: '#fff'
                                }
                            }
                        },
                        paymentMethods: {
                            maxInstallments: 1,
                        }
                    },
                    callbacks: {
                        onReady: () => {
                            // callback llamado cuando Brick esté listo
                        },
                        onSubmit: (cardFormData) => {
                            //  callback llamado cuando el usuario haga clic en el botón enviar los datos
                            //  ejemplo de envío de los datos recolectados por el Brick a su servidor
                            return new Promise((resolve, reject) => {
                                fetch("{{ route('web_process_payment', $sale_id) }}", {
                                        method: "PUT",
                                        headers: {
                                            "Content-Type": "application/json",
                                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                        },
                                        body: JSON.stringify(cardFormData)
                                    })
                                    .then((response) => {
                                        if (!response.ok) {
                                            return response.json().then(error => {
                                                throw new Error(error.error);
                                            });
                                        }
                                        return response.json();

                                    })
                                    .then((data) => {
                                        if (data.status == 'approved') {
                                            window.location.href = data.url;
                                        } else {
                                            alert('No se pudo continuar el proceso');
                                            window.location.href = data.url;
                                        }
                                    })
                                    .catch((error) => {
                                        if (error instanceof SyntaxError) {
                                            // Si hay un error de sintaxis al analizar la respuesta JSON
                                            alert('Error al procesar el pago.');
                                        } else {
                                            // Mostrar la alerta con el mensaje de error devuelto por el backend
                                            alert(error.message);
                                        }
                                    })
                            });
                        },
                        onError: (error) => {
                            console.log(error)
                        },
                    },
                };
                window.cardPaymentBrickController = await bricksBuilder.create('cardPayment',
                    'cardPaymentBrick_container', settings);
            };
            renderCardPaymentBrick(bricksBuilder);
        </script>
    @endif

@stop
