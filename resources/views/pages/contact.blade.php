@extends('layouts.webpage')

@section('content')

<!-- Page banner area start here -->
<section class="page-banner bg-image pt-80 pb-80" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">
            Contactanos
        </h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="index.html" class="primary-hover">
                <i class="fa-solid fa-house me-1"></i> 
                Home 
                <i class="fa-regular text-white fa-angle-right"></i></a>
            <span>Contactanos</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Contact form area start here -->
<section class="contact pt-80 pb-80">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="content radius-10 bg-image">
                    <h2>¿Tienes algo en mente? <br>
                        Hablemos.</h2>
                    <p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore <br> et dolore magna
                        aliqua.
                        Ut enim ad minim.</p>
                    <div class="arry">
                        <img src="themes/webpage/assets/images/contact/arry.png" alt="">
                    </div>
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps/d/viewer?mid=1UZ57Drfs3SGrTgh6mrYjQktu6uY&amp;hl=en_US&amp;ll=18.672105000000013%2C105.68673800000003&amp;z=17"
                                target="_blank"><i class="fa-solid fa-location-dot"></i>785 15h Street,
                                Office
                                478
                                Berlin </a>
                        </li>
                        <li>
                            <a href="tel:1-732-798-0976"><i class="fa-solid fa-phone-volume"></i>+1 800
                                555 4565
                            </a>
                        </li>
                        <li><a href="mailto:company.info@mail.com"><i
                                    class="fa-solid fa-envelope"></i>info.stoky@company.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-area">
                    <form action="#0">
                        <input type="text" placeholder="Nombre Completo">
                        <input type="text" placeholder="Teléfono">
                        <input type="email" placeholder="Correo Electrónico">
                        <textarea name="Your Review" id="massage" placeholder="Mensage..."></textarea>
                        <div class="radio-btn mt-2">
                            <span></span>
                            <a href=""><p>Acepto sus términos y condiciones</p></a>
                        </div>
                        <button class="mt-40 btn-one"><span>Enviar Ahora</span></button>
                    </form>
                </div>
            </div>
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