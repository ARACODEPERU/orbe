<div>
    <div class="slider-container">
        <div class="slider">
            @foreach ($sliders as $slide)
                <img src="{{ asset('storage/' . $slide->item->items[0]->content) }}" alt="Imagen 1"> 
            @endforeach
        </div>
        <button class="prev-button">&#10094;</button>
        <button class="next-button">&#10095;</button>
    </div>


    <style>
        .slider-container {
            position: relative;
            max-width: 100%;
            margin-top: 0px;
            overflow: hidden;
            /* Oculta las imágenes fuera del contenedor */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            /* Transición suave del deslizamiento */
        }

        .slider img {
            width: 100%;
            height: auto;
            flex-shrink: 0;
            /* Impide que las imágenes se encojan */
            display: block;
        }

        .prev-button,
        .next-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
            font-size: 24px;
            z-index: 10;
            /* Asegura que los botones estén por encima del slider */
        }

        .prev-button {
            left: 10px;
            border-radius: 50%;
        }

        .next-button {
            right: 10px;
            border-radius: 50%;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.querySelector('.slider');
            const prevButton = document.querySelector('.prev-button');
            const nextButton = document.querySelector('.next-button');
            const images = document.querySelectorAll('.slider img');

            let currentIndex = 0;
            const totalImages = images.length;
            let autoSlideInterval;

            // Función para actualizar la posición del slider
            function updateSlider() {
                const imageWidth = images[0].clientWidth; // Obtener el ancho de la primera imagen
                slider.style.transform = `translateX(${-currentIndex * imageWidth}px)`;
            }

            // Función para avanzar al siguiente slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalImages;
                updateSlider();
            }

            // Función para iniciar el deslizamiento automático
            function startAutoSlide() {
                // Cambiar de imagen cada 3 segundos (3000 milisegundos)
                autoSlideInterval = setInterval(nextSlide, 3000);
            }

            // Función para detener el deslizamiento automático
            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Manejador del botón "Siguiente"
            nextButton.addEventListener('click', () => {
                stopAutoSlide(); // Detener el auto-deslizamiento al interactuar
                nextSlide();
                startAutoSlide(); // Reiniciar el auto-deslizamiento después de un clic
            });

            // Manejador del botón "Anterior"
            prevButton.addEventListener('click', () => {
                stopAutoSlide(); // Detener el auto-deslizamiento al interactuar
                currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                updateSlider();
                startAutoSlide(); // Reiniciar el auto-deslizamiento después de un clic
            });

            // Añade soporte para deslizamiento táctil (opcional)
            let startX = 0;
            let endX = 0;

            slider.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                stopAutoSlide(); // Detener al empezar a tocar
            });

            slider.addEventListener('touchend', (e) => {
                endX = e.changedTouches[0].clientX;
                if (startX > endX + 50) {
                    nextSlide();
                } else if (startX < endX - 50) {
                    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                    updateSlider();
                }
                startAutoSlide(); // Reiniciar al soltar
            });

            // Detener el auto-deslizamiento cuando el cursor está sobre el slider
            slider.addEventListener('mouseenter', stopAutoSlide);
            // Reiniciar el auto-deslizamiento cuando el cursor sale del slider
            slider.addEventListener('mouseleave', startAutoSlide);

            // Se asegura de que el slider se adapte al cambiar el tamaño de la ventana
            window.addEventListener('resize', updateSlider);

            // Iniciar el deslizamiento automático al cargar la página
            startAutoSlide();
        });
    </script>
</div>