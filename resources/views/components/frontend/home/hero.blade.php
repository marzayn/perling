<div class="relative w-full overflow-hidden min-h-[800px] pt-2">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/home/bg-home.png') }}" alt="Hero Background" class="w-full h-full object-contain md:object-cover rounded-b-2xl">
    </div>

    <!-- Tagline -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 mt-20 md:mt-10" style="z-index: 0;>
        <div class="grid grid-cols-1 items-center">
            <div class="text-center space-y-6 animate-fade-in-up">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">
                    <span class="bg-blue-600 px-4 py-1 rounded-full text-white">Digital Hub</span> for Smarter</br> Environmental Documents
                </h1>
                <h6 class="text-xl text-gray-700">
                    Create. Track. Integrate. All your environmental documents in one place.
                </h6>
            </div>
        </div>

    </div>

</div>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }
</style>
