@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/frontend/home/hero.css') }}">
@endpush

<section class="relative w-full overflow-hidden min-h-[600px] md:min-h-[800px]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset($heros['background_image']) }}" alt="Hero Background" class="w-full h-full object-contain md:object-cover rounded-b-2xl">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 mt-20 md:mt-10" style="z-index: 0;>
        <div class="grid grid-cols-1 items-center">
            <div class="text-center space-y-6 animate-fade-in-up">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">
                    <span class="bg-blue-600 px-4 py-1 rounded-full text-white">{{ $heros['badge'] }}</span> {{ $heros['title_one'] }}</br>{{ $heros['title_two'] }}
                </h1>
                <h6 class="text-xl text-gray-700">
                    {{ $heros['subtitle'] }}
                </h6>
            </div>
        </div>

    </div>
</section>
