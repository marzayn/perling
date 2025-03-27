<section class="container mx-auto px-4 max-w-7xl">
<div class="relative w-full overflow-hidden h-96 group rounded-3xl mt-10">
    <div id="slider-container" class="relative h-full w-full">
        <!-- Images -->
        <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out slide" data-active="true">
            <div class="absolute inset-0 transition-transform duration-10000 ease-linear transform animate-ken-burns rounded-3xl">
                <img src="{{ asset('assets/images/home/slider_1.webp') }}" alt="Slide 1" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out slide">
            <div class="absolute inset-0 transition-transform duration-10000 ease-linear transform animate-ken-burns rounded-3xl">
                <img src="{{ asset('assets/images/home/slider_2.webp') }}" alt="Slide 2" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- Gradient bawah -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

    <!-- Navigation -->
    <button id="prev-button" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white p-3 rounded-full transition-all duration-300 z-10 opacity-0 group-hover:opacity-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button id="next-button" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white p-3 rounded-full transition-all duration-300 z-10 opacity-0 group-hover:opacity-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Indicator -->
    <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3 z-10">
        <button data-index="0" class="h-1.5 w-12 bg-white rounded-full opacity-60 hover:opacity-100 transition-all duration-300 indicator active-indicator"></button>
        <button data-index="1" class="h-1.5 w-8 bg-white rounded-full opacity-60 hover:opacity-100 transition-all duration-300 indicator"></button>
    </div>
</div>

</section>

<style>
    /* @keyframes kenBurns {
        from {
            transform: scale(1.05);
        }
        to {
            transform: scale(1.15);
        }
    } */

    .animate-ken-burns {
        animation: kenBurns 20s infinite alternate ease-in-out;
    }

    .active-indicator {
        height: 0.375rem;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.getElementById('prev-button');
        const nextButton = document.getElementById('next-button');
        const indicators = document.querySelectorAll('.indicator');
        let currentIndex = 0;
        const slidesCount = slides.length;

        // Initialize the first slide
        slides[0].classList.add('opacity-100');

        // Set active indicator
        function setActiveIndicator(index) {
            indicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.add('opacity-100');
                    indicator.classList.add('active-indicator');
                    indicator.classList.add('w-12');
                } else {
                    indicator.classList.remove('opacity-100');
                    indicator.classList.remove('active-indicator');
                    indicator.classList.remove('w-12');
                }
            });
        }

        // Go to slide
        function goToSlide(index) {
            if (index < 0) {
                index = slidesCount - 1;
            } else if (index >= slidesCount) {
                index = 0;
            }

            // Hide all slides
            slides.forEach((slide) => {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
            });

            // Show the target slide
            slides[index].classList.add('opacity-100');
            slides[index].classList.remove('opacity-0');

            currentIndex = index;
            setActiveIndicator(currentIndex);
        }

        // Navigation
        prevButton.addEventListener('click', () => goToSlide(currentIndex - 1));
        nextButton.addEventListener('click', () => goToSlide(currentIndex + 1));

        // Indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => goToSlide(index));
        });

        // Touch swipe support
        let touchStartX = 0;
        const sliderContainer = document.getElementById('slider-container');

        sliderContainer.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        sliderContainer.addEventListener('touchend', (e) => {
            const touchEndX = e.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    goToSlide(currentIndex + 1); // Swipe left
                } else {
                    goToSlide(currentIndex - 1); // Swipe right
                }
            }
        });

        // Autoplay
        let autoplayInterval = setInterval(() => goToSlide(currentIndex + 1), 5000);

        sliderContainer.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
        sliderContainer.addEventListener('mouseleave', () => {
            autoplayInterval = setInterval(() => goToSlide(currentIndex + 1), 5000);
        });

        // Initialize
        setActiveIndicator(currentIndex);
    });
</script>
