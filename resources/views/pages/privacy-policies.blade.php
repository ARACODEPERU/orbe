@extends('layouts.webpage')

@section('content')

<!-- Page banner area start here -->
<section class="page-banner bg-image pt-130 pb-130" data-background="{{ asset('themes/webpage/assets/images/banner/inner-banner.jpg') }}">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">
            Politicas de Privacidad
        </h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="index.html" class="primary-hover">
                <i class="fa-solid fa-house me-1"></i> 
                Home 
                <i class="fa-regular text-white fa-angle-right"></i></a>
            <span>Politicas de Privacidad</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Contact form area start here -->
<section class="contact pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about-two__text-box">
                    {{-- <div class="section-title">
                        <h2 class="section-title__title">Politicas De Privacidad</h2>
                    </div> --}}
                    <h3>Última actualización: 31/03/2025</h3>
                    <p style="text-align: justify;">
                        En <b>Orbe Corporation</b> estamos comprometidos con la protección de tu privacidad y la seguridad de la información personal 
                        que compartes con nosotros. 
                        Esta Política de Privacidad explica cómo recopilamos, usamos, y protegemos tu información personal 
                        cuando visitas nuestro sitio web <b>https://orbe.aracodeperu.com/</b> y realizas compras de nuestras motos eléctricas.
                    </p>
                    <br>

                    <h3>1. Información que Recopilamos</h3>
                    <p style="text-align: justify;">
                        <b>1.1 Información de Registro:</b> Cuando te registras en nuestro sitio o realizas una compra, recopilamos 
                        información personal que puede incluir tu nombre, dirección de correo electrónico, número de teléfono, 
                        dirección de envío y facturación.
                    </p>
                    <p style="text-align: justify;">
                        <b>1.2 Información de Pago:</b> Recopilamos información necesaria para procesar tus pagos, como los 
                        detalles de tu tarjeta de crédito o débito y otros datos financieros. Esta información es manejada a 
                        través de proveedores de pago seguros.
                    </p>
                    <p style="text-align: justify;">
                        <b>1.3 Información de Navegación:</b> Al navegar por nuestro sitio, podemos recopilar automáticamente 
                        información como tu dirección IP, tipo de navegador, páginas que visitas y el tiempo que pasas en el 
                        sitio mediante cookies y tecnologías similares.
                    </p>
                    <p style="text-align: justify;">
                        <b>1.4 Información de Vehículo:</b> En algunos casos, podemos recopilar información relacionada con 
                        el vehículo, como la identificación del vehículo (VIN), historial de servicio, y otras 
                        especificaciones técnicas.
                    </p>
                    <br>

                    <h3>2. Uso de la Información</h3>
                    <p style="text-align: justify;">
                        <b>2.1 Procesamiento de Pedidos:</b> Utilizamos tu información para procesar y completar tus pedidos, 
                        incluyendo la entrega, facturación y comunicación relacionada con la compra.
                    </p>
                    <p>
                        <b>2.2 Servicio al Cliente:</b> Tus datos pueden ser usados para brindarte soporte y atención al cliente, 
                        responder a tus consultas, y resolver cualquier problema que puedas tener con tu compra.
                    </p>
                    <p style="text-align: justify;">
                        <b>2.3 Marketing:</b> Con tu consentimiento, podemos utilizar tu información para enviarte boletines 
                        informativos, ofertas especiales, y otras comunicaciones de marketing relacionadas con nuestros 
                        productos y servicios.
                    </p>
                    <p style="text-align: justify;">
                        <b>2.4 Mejora de Productos y Servicios:</b> Analizamos la información que recopilamos para mejorar 
                        la calidad y el rendimiento de nuestros productos, así como para desarrollar nuevos modelos y 
                        características.
                    </p>
                    <br>

                    <h3>3. Compartir tu Información</h3>
                    <p style="text-align: justify;">
                        <b>3.1 Proveedores de Servicios:</b> Compartimos tu información con terceros que nos prestan 
                        servicios esenciales, como procesadores de pagos, servicios de entrega, y plataformas de marketing. 
                        Estos proveedores están obligados a proteger tu información y utilizarla solo para el propósito 
                        para el cual fue compartida.
                    </p>
                    <p style="text-align: justify;">
                        <b>3.2 Cumplimiento Legal:</b> Podemos divulgar tu información si es necesario para cumplir con la ley, 
                        responder a solicitudes legales, o proteger los derechos, propiedad o seguridad de <b>Orbe Corporation</b>, nuestros clientes u otros.
                    </p>
                    <p style="text-align: justify;">
                        <b>3.3 Transferencia de Negocios:</b> En el caso de una fusión, adquisición o venta de activos, 
                        tu información personal podría ser transferida a la nueva entidad como parte del proceso.
                    </p>
                    <br>

                    <h3>4. Seguridad de la Información</h3>
                    <p style="text-align: justify;">
                        Nos comprometemos a proteger tu información personal mediante el uso de medidas de seguridad 
                        adecuadas para prevenir el acceso no autorizado, la divulgación o la alteración de tus datos. 
                        No obstante, es importante tener en cuenta que ningún sistema de seguridad es completamente infalible.
                    </p>
                    <br>

                    <h3>5. Tus Derechos</h3>
                    <p style="text-align: justify;">
                        <b>5.1 Acceso y Rectificación:</b> Tienes derecho a acceder a la información personal que mantenemos 
                        sobre ti y a solicitar la corrección de cualquier error.
                    </p>
                    <p style="text-align: justify;">
                        <b>5.2 Cancelación y Oposición:</b> Puedes solicitar que eliminemos tu información personal o 
                        limitar cómo la utilizamos, aunque esto podría afectar nuestra capacidad para proporcionarte ciertos servicios.
                    </p>
                    <p style="text-align: justify;">
                        <b>5.3 Retiro del Consentimiento:</b> Si has dado tu consentimiento para recibir comunicaciones de marketing, 
                        puedes retirarlo en cualquier momento haciendo clic en el enlace de "cancelar suscripción" en nuestros 
                        correos electrónicos o contactándonos directamente.
                    </p>
                    <br>
                    
                    <h3>6. Cookies y Tecnologías Similares</h3>
                    <p style="text-align: justify;">
                        Utilizamos cookies y tecnologías similares para mejorar la funcionalidad de nuestro sitio web, 
                        analizar el comportamiento de los usuarios, y ofrecerte una experiencia más personalizada. Puedes 
                        ajustar las configuraciones de cookies en tu navegador para limitar o bloquear estas tecnologías.
                    </p>
                    <br>

                    <h3>7. Cambios a Esta Política de Privacidad</h3>
                    <p style="text-align: justify;">
                        Nos reservamos el derecho de actualizar esta Política de Privacidad en cualquier momento. 
                        Las modificaciones serán publicadas en esta página, y te notificaremos si realizamos cambios 
                        significativos que puedan afectarte.
                    </p>
                    <br>

                    <h3>8. Contacto</h3>
                    <p style="text-align: justify;">
                        Si tienes preguntas o inquietudes sobre nuestra Política de Privacidad o sobre cómo manejamos 
                        tu información personal, no dudes en contactarnos a través de 
                        <b>ventas@orbe.com</b>
                    </p>
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


@stop