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

                        </section>

                            <div class="totals">
                                <div class="totals-item theme-color float-end mt-20">
                                    <span class="fw-bold text-uppercase py-2">cart total =</span>
                                    <div class="totals-value d-inline py-2 pe-2" id="totalid">399.97</div>
                                </div>
                            </div>

                        </div>
                        <!-- shopping-cart-mobile -->
                        <div class="shopping-cart mobile-view bor sub-bg">


                            {{-- <div class="product p-4">
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
                            </div> --}}

                            {{-- <div class="totals">
                                <div class="totals-item theme-color float-end">
                                    <span class="fw-bold text-uppercase py-2">cart total =</span>
                                    <div id="totalid" class="totals-value d-inline py-2 pe-2">399.97</div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <form method="post" action="{{ route('web_pay') }}" id ="CartForm">
                        @csrf
                        <div class="col-md-3">
                            <div class="checkout__item-left sub-bg">
                                <h3 class="mb-40">Datos del comprador</h3>

                                <div id="input-hidden">
                                            {{-- <input type="hidden" name="product_id[]">
                                            <input type="hidden" name="product_name[]">
                                            <input type="hidden" name="product_category_id[]">
                                            <input type="hidden" name="product_quantity[]">
                                            <input type="hidden" name="product_price[]"> --}}
                                </div>
                                <label class="mb-10" for="names">Tu nombre *</label>
                                <input class="mb-20" id="names" name="names" type="text">
                                <label class="mb-10" for="phone">Email *</label>
                                <input class="mb-20" name="email" id="email" type="email">
                                <label class="mb-10" for="phone">Teléfono *</label>
                                <input class="mb-20" name="phone" id="phone" type="text">

                                <button type="submit" style="width: 100%;" href="" class="btn-one g-recaptcha" data-animation="fadeInUp" data-delay="1.8s" style="animation-delay: 1.8s;"  id="btn-crear-cuenta">
                                    <span>Comprar</span>
                                </button>

                            </div>
                        </div>
                </form>
                </div>
            </div>
        </section>
        <!-- cart page area end here -->

        <script>
           function quantity(index, masmen, price) {
                let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
                index = parseInt(index); // Convertir el índice a un número entero

                if (masmen == 1) {
                    carrito[index].quantity = parseInt(carrito[index].quantity) + 1;
                } else if (masmen == 0 && carrito[index].quantity > 1) {
                    carrito[index].quantity = parseInt(carrito[index].quantity) - 1;
                }

                //console.log("carrito en quantity: ", carrito);
                document.getElementById("p_q_" + carrito[index].id).value = carrito[index].quantity;
                localStorage.setItem('carrito', JSON.stringify(carrito));

                //console.log(carrito[index].quantity);
                //console.log(carrito[index].quantity * price);

                document.getElementById(index + "qty").value = carrito[index].quantity;
                let tempSubTotal = carrito[index].quantity * price;
                document.getElementById(index + "subTotal").innerHTML = "S/ " + formatearNumero(tempSubTotal);
                actualizarContador(carrito);
                getTotal();
            }
        </script>

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
        {{-- <script src="https://www.google.com/recaptcha/api.js?render=<?php echo config('services.recaptcha.site_key'); ?>"></script>
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
        </script> --}}
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
                //console.log("No se encontró el botón BTN CREAR");
            }

        },
        error: function(xhr) {
            // Ocurrió un error al realizar la consulta
            //console.log(xhr.responseText);
            // Aquí puedes manejar el error de alguna manera
        }
    });

}

function renderProducto(respuesta, i) {

    var cart = document.getElementById('cart');
    var inputhidden = document.getElementById('input-hidden');
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

        // Ordenar el arreglo carrito por el id
        carrito.sort((a, b) => a.id - b.id);

        // Convertir el arreglo ordenado a formato JSON
        let carritoJSON = JSON.stringify(carrito);

        // Guardar el arreglo ordenado de nuevo en el localStorage
        localStorage.setItem('carrito', carritoJSON);

        //console.log("carrito en renderProducto->"+i+"<-: ", carrito, carrito[i], name, price);

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
                            <div class="product-price">` + formatearNumero(Number(price).toFixed(2)) + `</div>
                            <div class="product-quantity">
                                <div class="plus-minus">
                                <a class="dec qtybutton" onclick="quantity(` + i + `, 0, `+price+`)">-</a>
                                <input class="quan" id="`+i+`qty" value="`+carrito[i].quantity+`" min="1" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled >
                                <a class="inc qtybutton" onclick="quantity(` + i + `, 1, `+price+`)">+</a>
                                </div>
                            </div>
                            <div id="`+i+`subTotal" class="product-line-price">S/ `+formatearNumero((price*carrito[i].quantity).toFixed(2))+`</div>
                            <div class="product-removal">
                                <button class="remove-product" onclick="eliminarproducto({ id: ` + id + `, nombre: '` +
                          name + `', precio: ` + price + ` });">
                                    <i class="fa-solid fa-x heading-color"></i>
                                </button>
                            </div>
                        </div>
                `;
                inputhidden.innerHTML += `
                            <input type="hidden"  name="product_id[]" value="`+carrito[i].id+`">
                            <input id="p_q_`+carrito[i].id+`" type="hidden" name="product_quantity[]" value="`+carrito[i].quantity+`">
                `;

    }
}

function confirmSubmit(event) {
event.preventDefault(); // Evita que el formulario se envíe automáticamente
carrito = JSON.parse(localStorage.getItem("carrito")) || [];
//console.log(carrito);
if(carrito.length>0){
//console.log(event);
event.target.form.submit();
}else
alert("No has elegido ningún curso");

}



function onSubmit(token) {
document.getElementById("CartForm").submit();
}



        </script>
        <style>
            .quan {
            background-color: #fff; /* Color de fondo */
            color: #000; /* Color del texto */
            cursor: default; /* Cursor predeterminado */
            pointer-events: none; /* Deshabilita eventos de puntero */
            opacity: 1; /* Opacidad completa */
            }
        </style>
@stop
