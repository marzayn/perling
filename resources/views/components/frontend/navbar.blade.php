<nav class="relative">
    <!-- Background Image Layer (Lowest z-index) -->
    <div class="absolute inset-y-0 w-full flex justify-center top-0 mt-6" style="z-index: 0;">
        <div class="max-w-7xl mx-auto w-full">
            <img src="{{ asset('assets/images/home/bg-nav.png') }}" class="w-full" alt="Navigation Background">
        </div>
    </div>

    <!-- Content Layer (Higher z-index) -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10" style="z-index: 10;">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/logo_color.svg') }}" alt="Mdal.net Logo" class="h-12 w-auto">
                </a>
            </div>

               <!-- Desktop Menu -->
               <div class="hidden md:flex items-center space-x-2">
                <div class="relative group">
                    <a href="{{ route('dashboard.index') }}" class="text-gray-700 text-sm font-medium px-4 py-2 rounded-full transition-all duration-300
                        hover:bg-blue-50 hover:text-blue-600 hover:shadow flex items-center group">
                        TATA CARA PENGAJUAN
                    </a>
                </div>
                <div class="relative group">
                    <a href="#pengajuan" class="text-gray-700 text-sm font-medium px-4 py-2 rounded-full transition-all duration-300
                        hover:bg-blue-50 hover:text-blue-600 hover:shadow flex items-center group pb-3">
                        MATERI
                        <svg class="ml-2 h-4 w-4 transform group-hover:rotate-180 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="absolute hidden group-hover:block bg-white rounded-xl shadow-2xl mt-0 pt-3 w-72 z-[100] overflow-hidden
                        animate-fade-in-down border border-blue-100" style="position: absolute; top: 100%;">
                        <div class="p-4 space-y-2">
                            <a href="#" class="px-4 py-3 text-gray-800 hover:bg-blue-50 rounded-lg transition-colors
                                flex items-center space-x-3 group">
                                <div class="bg-blue-100 p-2 rounded-full group-hover:bg-blue-200 transition-colors">
                                    <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span>Submenu Item 1</span>
                            </a>
                            <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-blue-50 rounded-lg transition-colors
                                flex items-center space-x-3 group">
                                <div class="bg-blue-100 p-2 rounded-full group-hover:bg-blue-200 transition-colors">
                                    <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <span>Submenu Item 2</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <a href="#pengajuan" class="text-gray-700 text-sm font-medium px-4 py-2 rounded-full transition-all duration-300
                        hover:bg-blue-50 hover:text-blue-600 hover:shadow flex items-center group pb-3">
                        FORMULIR
                        <svg class="ml-2 h-4 w-4 transform group-hover:rotate-180 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="absolute hidden group-hover:block bg-white rounded-xl shadow-2xl mt-0 pt-3 w-72 z-50 overflow-hidden
                        animate-fade-in-down border border-blue-100">
                        <div class="p-4 space-y-2">
                            <a href="#" class="px-4 py-3 text-gray-800 hover:bg-blue-50 rounded-lg transition-colors
                                flex items-center space-x-3 group">
                                <div class="bg-blue-100 p-2 rounded-full group-hover:bg-blue-200 transition-colors">
                                    <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span>Submenu Item 1</span>
                            </a>
                            <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-blue-50 rounded-lg transition-colors
                                flex items-center space-x-3 group">
                                <div class="bg-blue-100 p-2 rounded-full group-hover:bg-blue-200 transition-colors">
                                    <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <span>Submenu Item 2</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Remaining menu items following similar pattern -->
                <div class="relative group">
                    <a href="#formulir" class="text-gray-700 text-sm font-medium px-4 py-2 rounded-full transition-all duration-300
                        hover:bg-blue-50 hover:text-blue-600 hover:shadow flex items-center group">
                        DATA & INFORMASI
                    </a>
                </div>

                <div class="relative group">
                    <a href="#informasi" class="text-gray-700 text-sm font-medium px-4 py-2 rounded-full transition-all duration-300
                        hover:bg-blue-50 hover:text-blue-600 hover:shadow flex items-center group">
                        KEBIJAKAN
                    </a>
                </div>

                <div class="relative group">
                    <a href="#informasi" class="text-gray-700 text-sm font-medium px-4 py-2 rounded-full transition-all duration-300
                        hover:bg-blue-50 hover:text-blue-600 hover:shadow flex items-center group">
                        CATATAN RILIS
                    </a>
                </div>

                <!-- Login Button with enhanced style -->
                <a href="#login" class=" bg-lime-500  ml-4 relative overflow-hidden group text-white px-6 py-2.5 rounded-full
               hover:shadow-lg">
                    <span class="relative z-10">MASUK</span>
                    <span class="absolute left-0 bottom-0 w-0 h-full bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-toggle" class="text-gray-700 hover:text-blue-500 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden fixed inset-0 bg-white z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
        <div class="p-6">
            <div class="flex justify-between items-center mb-8">
                <img src="{{ asset('assets/images/asset/LOGO_PL.svg') }}" alt="Mdal.net Logo" class="h-10 w-auto">
                <button id="mobile-menu-close" class="text-gray-700">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="space-y-4">
                <div class="mobile-menu-item">
                    <button class="mobile-submenu-toggle w-full text-left text-gray-700 flex justify-between items-center py-3 border-b border-gray-200">
                        Tata Cara Pengajuan
                        <svg class="h-5 w-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="mobile-submenu hidden bg-gray-50 rounded-lg mt-2 p-2">
                        <a href="#" class="block text-gray-700 px-4 py-2 hover:bg-blue-50 hover:text-blue-600 rounded">Submenu Item 1</a>
                        <a href="#" class="block text-gray-700 px-4 py-2 hover:bg-blue-50 hover:text-blue-600 rounded">Submenu Item 2</a>
                    </div>
                </div>

                <div class="mobile-menu-item">
                    <button class="mobile-submenu-toggle w-full text-left text-gray-700 flex justify-between items-center py-3 border-b border-gray-200">
                        Materi
                        <svg class="h-5 w-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="mobile-submenu hidden bg-gray-50 rounded-lg mt-2 p-2">
                        <a href="#" class="block text-gray-700 px-4 py-2 hover:bg-blue-50 hover:text-blue-600 rounded">Submenu Item 1</a>
                        <a href="#" class="block text-gray-700 px-4 py-2 hover:bg-blue-50 hover:text-blue-600 rounded">Submenu Item 2</a>
                    </div>
                </div>

                <a href="#formulir" class="block text-gray-700 py-3 border-b border-gray-200 hover:text-blue-600">Formulir</a>
                <a href="#informasi" class="block text-gray-700 py-3 border-b border-gray-200 hover:text-blue-600">Informasi</a>
            </div>

            <div class="mt-8">
                <a href="#login" class="block text-center bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600">
                    MASUK
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
    });

    mobileMenuClose.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
    });

    // Mobile Submenu Toggle
    const mobileSubmenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
    mobileSubmenuToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            const submenu = e.currentTarget.nextElementSibling;
            const svg = e.currentTarget.querySelector('svg');

            submenu.classList.toggle('hidden');
            svg.classList.toggle('rotate-180');
        });
    });
</script>
