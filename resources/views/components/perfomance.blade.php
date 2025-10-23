<div>
    <section class="gallery-area">
        <div class="swiper gallery__slider">
            <div class="swiper-wrapper">
                @foreach ($perfomance as $key => $item)
                    <div class="swiper-slide">
                        <div class="gallery__item">
                            <div class="gallery__image image">
                                <img src="{{ asset('storage/' . $item->item->items[3]->content) }}"
                                    alt="{{ $item->item->items[0]->content }}">
                                {{-- <img src="themes/webpage/assets/images/gallery/gallery-image1.jpg" alt="image"> --}}
                            </div>
                            <div class="gallery__content">
                                <h3 class="mb-10">
                                    <a href="{{ $item->item->items[2]->content }}"
                                        target="_blank">{{ $item->item->items[0]->content }}</a>
                                </h3>
                                <p>{{ $item->item->items[1]->content }}</p>
                                <button type="button" class="btn-two mt-25" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <span>Ver Ahora</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: #000;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
