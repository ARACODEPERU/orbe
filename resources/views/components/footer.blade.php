<div>
    
    <footer class="footer-area bg-image" data-background="themes/webpage/assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer__wrp pt-65 pb-65 bor-top bor-bottom">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".1s">
                        <div class="footer__item">
                            <h4 class="footer-title">Navegar :</h4>
                            <ul>
                                <li><a href="{{ route('index_main') }}"><span></span>Home</a></li>
                                <li><a href=""><span></span>Nosotros</a></li>
                                <li><a href="{{ route('web_contact') }}"><span></span>Contactanos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <div class="footer__item">
                            <h4 class="footer-title">Legal :</h4>
                            <ul>
                                <li><a href="{{ route('web_privacy') }}"><span></span>Politicas de Privacidad</a></li>
                                <li><a href="{{ route('web_claims') }}"><span></span>Libro de Reclamaciones</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="footer__item">
                            <h4 class="footer-title">Link :</h4>
                            <ul>
                                <li><a href="{{ route('dashboard') }}"><span></span>Intranet</a></li>
                                <li><a href=""><span></span>WebMail</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".4s">
                        <div class="footer__item newsletter">
                            <h4 class="footer-title">Siguenos en :</h4>
                            {{-- <div class="subscribe">
                                <input type="email" placeholder="Your Email">
                                <button><i class="fa-solid fa-paper-plane"></i></button>
                            </div> --}}
                            <div class="social-icon mt-40">
                                <a href="{{ $footer[1]->content }}" target="_blamk"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $footer[2]->content }}" target="_blamk"><i class="fa-brands fa-instagram"></i></a>
                                {{-- <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fa-brands fa-youtube"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copy-text pt-50 pb-50">
                <a href="{{ route('index_main') }}" class="logo d-block">
                    <img src="{{ asset('themes/webpage/assets/images/logo/logo.svg') }}" alt="logo">
                </a>
                <p>&copy; Copyright 2025 <a href="" class="primary-hover">Orbe</a> Todos los derechos reservados | Desarrollado por <a href="">Aracode Smarth Solutión</a></p>
            </div>
        </div>
    </footer>
</div>