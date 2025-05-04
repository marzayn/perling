@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/frontend/home/popup.css') }}">
@endpush

@push('script')
    <script src="{{ asset('assets/js/frontend/home/popup.js') }}"></script>
@endpush

<div id="popupBanner" class="fixed inset-0 z-50 flex items-center justify-center bg-black/85 hidden">
    <div class="relative bg-white w-11/12 max-w-6xl rounded-lg shadow-2xl overflow-hidden">
        <button id="closePopup" class="absolute right-3 top-3 z-10 text-gray-600 hover:text-gray-900 bg-white/80 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div id="bannerSlider" class="relative overflow-hidden rounded-lg h-[200px] md:h-[500px]">
            @foreach($popup as $popup)
                <!-- Slide Image -->
                <div class="banner-slide absolute inset-0">
                    <img src="{{ asset($popup['slide_image']) }}"
                        alt="Banner Image" class="w-full h-full object-cover">
                </div>
            @endforeach
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
