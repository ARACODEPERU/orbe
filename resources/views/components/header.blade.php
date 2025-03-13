
<div class="top__header pt-30 pb-30">
    <div class="container">
        <div class="top__wrapper">
            <a href="{{ route('index_main') }}" class="main__logo">
                <img src="{{ asset('themes/webpage/assets/images/logo/logo.svg') }}" alt="logo__image">
            </a>
            <div class="search__wrp">
                <input placeholder="Search for" aria-label="Search">
                <button><i class="fa-solid fa-search"></i></button>
            </div>
            <div class="account__wrap">
                <div class="cart d-flex align-items-center">
                    <span class="cart__icon">
                        <i class="fa-regular fa-cart-shopping" style="font-size: 18px;"></i>
                    </span>
                    <a href="#0" class="c__one">
                        <span id="totalCarritoWeb" title="Precio Total del Carrito">
                            S/ 0.00
                        </span>
                    </a>
                    <span id="contadorCarritoWeb" class="one"  style="background: #1397e1; color: #fff;" title="Cantidad de productos en el carrito">
                        0
                    </span>
                    <span id="contadorCarritoMovil" style="display: none" class="one"  style="background: #1397e1; color: #fff;" title="Cantidad de productos en el carrito">
                        0
                    </span>
                </div>
                {{-- <div class="flag__wrap">
                    <div class="flag">
                        <img src="themes/webpage/assets/images/flag/us.png" alt="flag">
                    </div>
                    <select name="flag">
                        <option value="0">
                            Usa
                        </option>
                        <option value="1">
                            Canada
                        </option>
                        <option value="2">
                            Australia
                        </option>
                        <option value="3">
                            Germany
                        </option>
                    </select>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<header class="header-section">
    <div class="container-xxl">
        <div class="header-wrapper">
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="main-menu">
                <li>
                    <a href="{{ route('index_main') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('web_about') }}">Nosotros</a>
                </li>
                <li>
                    <a href="">Productos <i class="fa-regular fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li class="subtwohober">
                            <a href="index.html">
                                Pedestales
                            </a>
                        </li>
                        <li class="subtwohober">
                            <a href="index.html">
                                Conectores
                            </a>
                        </li>
                        <li class="subtwohober">
                            <a href="index.html">
                                Cables
                            </a>
                        </li>
                        <li class="subtwohober">
                            <a href="index.html">
                                Microfonos
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('web_contact') }}">Contactanos</a>
                </li>
            </ul>
            {{-- <div class="shipping__item d-none d-sm-flex align-items-center">
                <div class="menu__right d-flex align-items-center">
                    <div class="thumb">
                        <img src="themes/webpage/assets/images/flag/picking.png" alt="image">
                    </div>
                    <div class="content">
                        <p>
                            Picking up?
                        </p>
                        <div class="items">
                            <select class="form__select p-0">
                                <option value="1">
                                    Select Store
                                </option>
                                <option value="2">
                                    Store One
                                </option>
                                <option value="3">
                                    Store Two
                                </option>
                                <option value="3">
                                    Store Three
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="menu__right d-flex align-items-center">
                    <div class="thumb">
                        <img src="themes/webpage/assets/images/flag/shipping.png" alt="image">
                    </div>
                    <div class="content">
                        <p>
                            Free Shipping <br> on order <strong>over $100</strong>
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</header>
