<div id="popupBanner" class="fixed inset-0 z-50 flex items-center justify-center bg-black/85 hidden">
    <div class="relative bg-white w-11/12 max-w-6xl rounded-lg shadow-2xl overflow-hidden">
        <!-- Close button (now floating on top of content) -->
        <button id="closePopup" class="absolute right-3 top-3 z-10 text-gray-600 hover:text-gray-900 bg-white/80 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Simplified Slider container -->
        <div id="bannerSlider" class="relative overflow-hidden rounded-lg h-[200px] md:h-[500px]">
            <!-- Slide 1 -->
            <div class="banner-slide absolute inset-0">
                 <img src="{{ asset ('assets/images/home/slider.jpg') }}"
                     alt="Banner Image" class="w-full h-full object-cover">
            </div>

            <!-- Slide 2 -->
            <div class="banner-slide absolute inset-0 hidden">
                      <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                     alt="Banner Image" class="w-full h-full object-cover">
            </div>

            <!-- Slide 3 -->
            <div class="banner-slide absolute inset-0 hidden">
                <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                     alt="Banner Image" class="w-full h-full object-cover">
            </div>

            <!-- Navigation -->
            <button id="prevSlide" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/80 text-gray-800 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="nextSlide" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/80 text-gray-800 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Dots -->
            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                <button class="w-3 h-3 rounded-full bg-white/50 dot-indicator active"></button>
                <button class="w-3 h-3 rounded-full bg-white/50 dot-indicator"></button>
                <button class="w-3 h-3 rounded-full bg-white/50 dot-indicator"></button>
            </div>
        </div>
    </div>
</div>

<style>
    .banner-slide {
        transition: opacity 0.5s ease;
    }
    .dot-indicator.active {
        background-color: #3182ce;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show popup with slight delay after page load
        setTimeout(function() {
            document.getElementById('popupBanner').classList.remove('hidden');
        }, 800);

        // Close popup when clicking the close button
        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popupBanner').classList.add('hidden');
        });

        // Close popup when clicking outside the banner
        document.getElementById('popupBanner').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });

        // Slider functionality
        const slides = document.querySelectorAll('.banner-slide');
        const dots = document.querySelectorAll('.dot-indicator');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.add('hidden'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].classList.remove('hidden');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        // Auto slide every 5 seconds
        let slideInterval = setInterval(() => {
            let nextSlide = (currentSlide + 1) % slides.length;
            showSlide(nextSlide);
        }, 5000);

        // Navigation buttons
        document.getElementById('nextSlide').addEventListener('click', function() {
            clearInterval(slideInterval);
            let nextSlide = (currentSlide + 1) % slides.length;
            showSlide(nextSlide);
            slideInterval = setInterval(() => {
                nextSlide = (currentSlide + 1) % slides.length;
                showSlide(nextSlide);
            }, 5000);
        });

        document.getElementById('prevSlide').addEventListener('click', function() {
            clearInterval(slideInterval);
            let prevSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prevSlide);
            slideInterval = setInterval(() => {
                let nextSlide = (currentSlide + 1) % slides.length;
                showSlide(nextSlide);
            }, 5000);
        });

        // Dot indicators
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                clearInterval(slideInterval);
                showSlide(index);
                slideInterval = setInterval(() => {
                    let nextSlide = (currentSlide + 1) % slides.length;
                    showSlide(nextSlide);
                }, 5000);
            });
        });
    });
</script>
