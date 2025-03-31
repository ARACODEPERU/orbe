@extends('layouts.webpage')

@section('content')

<!-- Page banner area start here -->
<section class="page-banner bg-image pt-80 pb-80" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">
            Libro de Reclamaciones
        </h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="index.html" class="primary-hover">
                <i class="fa-solid fa-house me-1"></i> 
                Home 
                <i class="fa-regular text-white fa-angle-right"></i></a>
            <span>Libro de Reclamaciones</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Contact form area start here -->
<section class="contact pt-80 pb-130">
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('send_claim') }}">
                @csrf
                <div class="col-md-12">
                    <h3>1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE</h3>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="formGroupExampleInput">Tu Nombre *</label>
                        <input type="text" class="form-control" name="names" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="formGroupExampleInput">Tus Apellidos *</label>
                        <input type="text" class="form-control" name="lastnames" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputEmail1">Tu correo electrónico *</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="formGroupExampleInput">Teléfono *</label>
                        <input type="text" class="form-control" name="phone" id="formGroupExampleInput" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                      <label for="exampleFormControlSelect1">Tipo documento *</label>
                      <select name="document_type" class="form-control" id="exampleFormControlSelect1">
                        <option value="DNI">DNI</option>
                        <option value="C.E.">C.E.</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="formGroupExampleInput">Número de documento *</label>
                        <input type="text" class="form-control" name="number" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Dirección *</label>
                        <input type="text" class="form-control" name="address" id="formGroupExampleInput" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Distrito *</label>
                        <input type="text" class="form-control" name="district" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Ciudad *</label>
                        <input type="text" class="form-control" name="city" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Departamento *</label>
                        <input type="text" class="form-control" name="state" id="formGroupExampleInput" placeholder="">
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <h3>2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h3>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Producto / Servicio *</label>
                        <select class="form-control" name="product_service" id="exampleFormControlSelect1">
                        <option>-- Por favor, elige una opción --</option>
                        <option value="Producto">Producto</option>
                        <option value="Servicio">Servicio</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Descripción del producto/servicio *</label>
                        <input type="text" class="form-control" name="product_description" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Monto del producto/servicio *</label>
                        <input type="text" class="form-control" name="amount" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Lugar de compra *</label>
                        <input type="text" class="form-control" name="bought_place" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Fecha de compra *</label>
                        <input type="text" class="form-control" name="date_bought" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Módelo *</label>
                        <input type="text" class="form-control" name="model" id="formGroupExampleInput" placeholder="">
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <h3>3. DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR</h3>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlSelect1">Queja / Reclamo *</label>
                    <select name="queja_reclamo" class="form-control" id="exampleFormControlSelect1">
                    <option name="0">-- Por favor, elige una opción --</option>
                    <option name="Queja">Queja</option>
                    <option name="Reclamo" >Reclamo</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Detalle:</label>
                        <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Pedido:</label>
                        <textarea class="form-control" name="pedido" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <h3>4. OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR</h3>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1" class="form-label">Detalle:</label>
                  <textarea class="form-control" name="acciones" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <br>
                <div class="form-check col-md-12">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                      Politicas de Privaidad
                    </label>
                </div>
                <br>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn-one">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar
                    </button>
                </div>
              </form>
        </div>
    </div>
</section>
<!-- Contact form area end here -->

<!-- Contact map area start here -->
{{-- <div class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445134!2d-74.2598661379975!3d40.697149417741365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1670395681365!5m2!1sen!2sbd"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> --}}
<!-- Contact map area end here -->

<!-- Footer area start here -->
<x-footer />
<!-- Footer area end here -->

@stop