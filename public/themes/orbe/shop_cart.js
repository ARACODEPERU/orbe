
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

                respuesta.items.forEach(function(item) {
                    // Accede a las propiedades del objeto
                    renderProducto(item);
                    // Crea un elemento input oculto
                    let inputHidden = document.createElement("input");
                    // Establece los atributos del input
                    inputHidden.type = "hidden";
                    inputHidden.name = "item_id[]"; // Asigna el nombre que desees
                    inputHidden.value = item.id; // Asigna el valor que desees
                    // Agrega el input al div
                    divCartHidden.appendChild(inputHidden);
                });

                btnCrear = document.getElementById("btn-crear-cuenta");
                    btnCrear.removeAttribute("disabled");

            },
            error: function(xhr) {
                // Ocurrió un error al realizar la consulta
                console.log(xhr.responseText);
                // Aquí puedes manejar el error de alguna manera
            }
        });

    }

    function renderProducto(respuesta) {

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
                                    <input type="number" value="2" min="1">
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


