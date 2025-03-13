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
                        <div class="shopping-cart radius-10 bor sub-bg" id="divCartHidden">
                            <div
                                class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                                <label class="product-details">Productos</label>
                                <label class="product-price">Precio</label>
                                <label class="product-quantity">Cantidad</label>
                                <label class="product-line-price">Total</label>
                                <label class="product-removal">Acción</label>
                            </div>
                            <section id="cart">
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
                        </section>

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
                    <form action="" id ="CartForm">
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
                                <br><br>
                                <a style="width: 100%;" href="" class="btn-one" data-animation="fadeInUp" data-delay="1.8s" style="animation-delay: 1.8s;">
                                    <span>Comprar</span>
                                </a>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </section>
        <!-- cart page area end here -->


        <script>

            const headers = document.querySelectorAll('.accordion-header-aracode');
            headers.forEach(header => {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const isVisible = content.style.maxHeight;

                    // Ocultar todos los contenidos y resetear iconos
                    document.querySelectorAll('.accordion-content-aracode').forEach(item => {
                        item.style.maxHeight = null;
                        item.style.padding = '0';
                        item.setAttribute('aria-hidden', 'true');
                    });
                    headers.forEach(h => {
                        h.classList.remove('active');
                        h.querySelector('.accordion-icon-aracode').textContent = '►'; // Restablecer icono
                        h.setAttribute('aria-expanded', 'false');
                    });

                    // Mostrar el contenido del header clicado
                    if (!isVisible) {
                        content.style.maxHeight = content.scrollHeight + "px";
                        content.style.padding = '15px';
                        this.classList.add('active'); // Añadir clase activa al encabezado clicado
                        this.querySelector('.accordion-icon-aracode').textContent = '▼'; // Cambiar icono al expandido
                        this.setAttribute('aria-expanded', 'true');
                        content.setAttribute('aria-hidden', 'false');
                    }
                });
            });
            </script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('themes/orbe/shop_cart.js') }}"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo config('services.recaptcha.site_key'); ?>"></script>
        <script>
            document.getElementById('CartForm').addEventListener('submit', function(event) {
                event.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo config('services.recaptcha.site_key'); ?>', {action: 'submit'}).then(function(token) {
                        document.getElementById('recaptcha_token').value = token;
                        document.getElementById('CartForm').submit();
                    });
                });
            });
        </script>
        <script>

    cargarItemsCarritoBD();

function cargarItemsCarritoBD() {
    document.getElementById('cart').innerHTML =
        ""; // BORRAR contenido de la vista, antes de cargar de la base de datos
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    myIds = [];
    carrito.forEach(function(item) {
        // Hacer algo con cada elemento del carrito

        myIds.push(parseInt(item.id));
    });

    // btnCrear = document.getElementById("btn-crear-cuenta");
    //             btnCrear.setAttribute("disabled", "disabled");
    realizarConsulta(myIds);
}

function realizarConsulta(ids) {
    // Realizar la petición Ajax
    var token_csrf = $('meta[name="csrf-token"]').attr('content');
    token_csrf = "{{ csrf_token() }}";
    $.ajax({
        url: "{{ route('onlineshop_get_item_carrito') }}",
        type: 'POST',
        data: {
            ids: ids
        },
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': token_csrf
        },
        success: function(respuesta) {
            // Obtén una referencia al elemento div por su ID
            var divCartHidden = document.getElementById("divCartHidden");

            var index = 0;
            respuesta.items.forEach(function(item) {
                // Accede a las propiedades del objeto
                renderProducto(item, index++);
                // Crea un elemento input oculto
                let inputHidden = document.createElement("input");
                // Establece los atributos del input
                inputHidden.type = "hidden";
                inputHidden.name = "item_id[]"; // Asigna el nombre que desees
                inputHidden.value = item.id; // Asigna el valor que desees
                // Agrega el input al div
                divCartHidden.appendChild(inputHidden);
            });

            try {
                btnCrear = document.getElementById("btn-crear-cuenta");
                btnCrear.removeAttribute("disabled");
            } catch (error) {
                console.log("No se encontró el botón BTN CREAR");
            }

        },
        error: function(xhr) {
            // Ocurrió un error al realizar la consulta
            console.log(xhr.responseText);
            // Aquí puedes manejar el error de alguna manera
        }
    });

}

function renderProducto(respuesta, i) {

    var cart = document.getElementById('cart');
    if (cart != null) {
        var id = respuesta.id;
        var teacher = respuesta.teacher;
        var teacher_id = respuesta.teacher_id;
        var avatar = respuesta.avatar;
        var image = respuesta.image;
        var name = respuesta.name;
        var price = respuesta.price;
        var modalidad = respuesta.additional;
        var url_campus = "";
        var url_descripcion_programa = "/curso-descripcion/"+id; // esta ruta deberá corregirse si se cambia el el get de la RUTA :S

        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        /*
       cart.innerHTML += `
    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500" id="` + id + `_pc">
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div class="flex items-center space-x-4">
                                            <div class="avatar">
                                            <img
                                                class="rounded-full"
                                                src="` + image + `"
                                                alt="avatar"
                                            />
                                            </div>

                                            <span class="font-medium text-slate-700 dark:text-navy-100">
                                                <a href="`+url_descripcion_programa+`" target="_blank">` + name + `</a>
                                            </span>
                                        </div>
                                    </td>
                                    <td
                                    class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                    <b>` + modalidad + `</b>
                                    </td>
                                    <td
                                    class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                    <b>S/ ` + price + `</b>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 text-slate-700 dark:text-navy-100 sm:px-5">
                                        <button class="boton-degradado-trash" onclick="eliminarproducto({ id: ` + id + `, nombre: '` +
                          name + `', precio: ` + price + ` });">
                                                <i class="fa fa-trash" aria-hidden="true" style="font-size: 16px;">
                                                    <a title="Eliminar este Curso" class="remove"></a>
                          </i>
                                        </button>
                                    </td>
                                </tr>
                `;
        */

        cart.innerHTML += `
                        <div class="product p-4 bor-top bor-bottom d-flex justify-content-between align-items-center">
                            <div class="product-details d-flex align-items-center">
                                <img src="` + image + `" alt="image">
                                <h4 class="ps-4 text-capitalize">` + name + `</h4>
                            </div>
                            <div class="product-price">` + price + `</div>
                            <div class="product-quantity">
                                <input type="number" value="`+carrito[i].quantity+`" min="1">
                            </div>
                            <div class="product-line-price">25.98</div>
                            <div class="product-removal">
                                <button class="remove-product" onclick="eliminarproducto({ id: ` + id + `, nombre: '` +
                          name + `', precio: ` + price + ` });">
                                    <i class="fa-solid fa-x heading-color"></i>
                                </button>
                            </div>
                        </div>
                `;
    }
}

function confirmSubmit(event) {
event.preventDefault(); // Evita que el formulario se envíe automáticamente
carrito = JSON.parse(localStorage.getItem("carrito")) || [];
console.log(carrito);
if(carrito.length>0){
console.log(event);
event.target.form.submit();
}else
alert("No has elegido ningún curso");

}



function onSubmit(token) {
document.getElementById("CartForm").submit();
}



        </script>
@stop
