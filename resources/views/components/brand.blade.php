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
                                <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->description }}" title="{{ $brand->description }}" style="width: 100%;
                                                                                                                                                            height: auto;
                                                                                                                                                            object-fit: contain;
                                                                                                                                                            ">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
