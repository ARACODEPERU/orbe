<div>
    <section class="brand-area pt-130 pb-130">
        <div class="container">
            <div class="sub-title text-center mb-65">
                <h3>
                    <span class="title-icon"></span> Nuestras mejores marcas <span class="title-icon"></span>
                </h3>
            </div>
            <div class="swiper brand__slider">
                <div class="swiper-wrapper">
                    @foreach ($brands as $brand)
                        <div class="swiper-slide">
                            <div class="brand__item bor radius-10 text-center p-4" title="{{ $brand->description }}">
                                <img src="{{ $brand->image }}" alt="foreach" title="{{ $brand->description }}">
                            </div>
                        </div>
                    @endforeach



                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="themes/webpage/assets/images/brand/brand2.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="themes/webpage/assets/images/brand/brand3.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="themes/webpage/assets/images/brand/brand4.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="themes/webpage/assets/images/brand/brand5.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="themes/webpage/assets/images/brand/brand6.png" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
