<section class="news-section relative overflow-hidden py-20 bg-gradient-to-b from-[#0c1a3f] via-[#0c2a6f] to-[#0c1a3f]">
    <!-- Advanced particle background -->
    <div class="container max-w-6xl mx-auto">
    <div class="absolute inset-0">
        <div id="particles-js" class="absolute inset-0 opacity-30"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(12,42,111,0.8),rgba(8,8,40,0.9))] mix-blend-multiply"></div>
    </div>

    <!-- Enhanced 3D floating elements -->
    <div class="absolute w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-1/5 left-10 w-80 h-80 rounded-full mix-blend-screen opacity-10 animate-float-slow" style="background: radial-gradient(circle, rgba(139,92,246,0.8) 0%, rgba(76,29,149,0) 70%); filter: blur(60px);"></div>
        <div class="absolute bottom-1/4 right-5 w-96 h-96 rounded-full mix-blend-screen opacity-10 animate-float-slow-reverse" style="background: radial-gradient(circle, rgba(72,127,255,0.8) 0%, rgba(8,145,178,0) 70%); filter: blur(70px); animation-delay: 2s;"></div>
        <div class="absolute top-2/3 left-1/4 w-72 h-72 rounded-full mix-blend-screen opacity-10 animate-float" style="background: radial-gradient(circle, rgba(124,207,0,0.6) 0%, rgba(5,150,105,0) 70%); filter: blur(60px); animation-delay: 3s;"></div>
    </div>

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- 3D Floating Section Header with perspective -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-16 perspective-hero relative z-10">
            <!-- Sisi Kiri: Title and subtitle -->
            <div class="mb-10 lg:mb-0 lg:w-1/2">
                <div class="relative">
                    <h2 class="text-5xl sm:text-6xl font-extrabold bg-clip-text mb-3 tracking-tight text-white">
                        Berita & Updates
                    </h2>
                </div>
                <p class="mt-6 text-gray-300 max-w-2xl text-lg">
                    Temukan informasi terbaru dan video menarik seputar Sistem Pengelolaan Dokumen Lingkungan dan kebijakan lingkungan hidup
                </p>
            </div>

            <!-- Sisi Kanan: Interactive 3D Glass Tabs -->
            <div class="lg:w-auto transform transition-all duration-500 hover:translate-y-[-5px]">
                <div class="relative flex flex-row sm:flex-row p-1 sm:p-1.5 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl z-10 tab-glass-container">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-[#487fff]/20 to-purple-500/20 blur-xl transform scale-[0.96] z-0"></div>
                    <div class="absolute -inset-0.5 rounded-2xl bg-gradient-to-r from-[#487fff]/30 to-purple-500/30 blur opacity-50 transform animate-pulse-slow"></div>
                    <button id="beritaTab" onclick="switchTab('berita')" class="relative group z-20 px-4 sm:px-6 md:px-8 py-3 sm:py-4 text-base sm:text-lg font-medium transition-all duration-500 ease-out bg-gradient-to-r from-[#7ccf00]/80 to-[#7ccf00]/80 text-white rounded-xl m-1 hover:shadow-lg w-full sm:w-auto">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#7ccf00] to-[#7ccf00] rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 blur-xl -z-10"></div>
                        <div class="relative flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"></path>
                            </svg>
                            <span>Berita</span>
                        </div>
                    </button>
                    <button id="videoTab" onclick="switchTab('video')" class="relative group z-20 px-4 sm:px-6 md:px-8 py-3 sm:py-4 text-base sm:text-lg font-medium transition-all duration-500 ease-out bg-white/5 text-white/80 rounded-xl m-1 hover:bg-white/10 w-full sm:w-auto">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#487fff] to-[#487fff] rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-300 blur-xl -z-10"></div>
                        <div class="relative flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                            </svg>
                            <span>Video</span>
                        </div>
                    </button>
                </div>
                <!-- Decorative element - hidden on small screens -->
                <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-gradient-to-br from-[#7ccf00]/30 to-[#487fff]/30 rounded-full blur-xl opacity-70 animate-pulse-slow hidden lg:block"></div>
            </div>
        </div>

        <!-- Konten Berita -->
        <div id="beritaContent" class="transition-all transform duration-500 opacity-100">
            <!-- Berita Utama -->
            <div class="mb-12 rounded-2xl transform transition-all duration-500 group">
            <div class="bg-gradient-to-br from-black/80 to-indigo-950/50 backdrop-blur-md border border-white/10 overflow-hidden rounded-2xl">
                <div class="lg:flex">
                <div class="lg:w-3/5 xl:w-2/3 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#7ccf00]/40 to-[#487fff]/40 mix-blend-overlay opacity-50"></div>
                    <div class="parallax-container h-[400px] lg:h-full overflow-hidden">
                    <img src="https://s3.palapacloud.id/amdalnet/public/berita/_DEC2485.jpg" alt="Featured news"
                         class="w-full h-full object-cover parallax-img transform transition-transform duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                    </div>
                </div>
                <div class="lg:w-2/5 xl:w-1/3 p-8 lg:p-12 flex flex-col justify-center relative lg:min-h-[500px]">
                    <div class="absolute inset-y-0 left-0 w-1 bg-gradient-to-b from-[#7ccf00] via-[#7ccf00] to-[#487fff] rounded-full hidden lg:block transform transition-transform duration-500 group-hover:scale-y-110"></div>
                    <div class="featured-content">
                    <div class="flex items-center space-x-2 mb-3">
                        <svg class="w-5 h-5 text-[#7ccf00]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-[#7ccf00] text-sm font-medium">11 Desember 2024</span>
                    </div>
                    <h3 class="text-white font-black text-3xl my-4 leading-tight group-hover:text-[#7ccf00] transition-colors duration-300">
                        Pengenalan dan Uji Coba Aplikasi Perling untuk Mendukung Sistem Persetujuan Lingkungan
                    </h3>
                    <p class="text-gray-300 mb-8 line-clamp-3 text-lg">
                        Bogor, 11 Desember 2024 - Dalam upaya meningkatkan efisiensi sistem persetujuan lingkungan di Indonesia, Kementerian Lingkungan Hidup dan Kehutanan telah meluncurkan aplikasi Perling yang inovatif...
                    </p>
                    <div>
                        <a href="#" class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#7ccf00] to-[#7ccf00] text-white text-sm font-medium rounded-lg overflow-hidden relative transition-all duration-300 hover:pr-9 hover:shadow-lg hover:shadow-[#7ccf00]/20">
                        <span>Baca Selengkapnya</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform translate-x-0 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        <span class="absolute right-0 w-8 h-full translate-x-full group-hover:translate-x-0 transition-transform duration-300 bg-white/10 flex items-center justify-center"></span>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- 3 Berita Tambahan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @for($i = 0; $i < 3; $i++)
            <div class="news-card group transform hover:-translate-y-1 transition-all duration-500 overflow-hidden">
                <div class="h-full flex flex-col bg-gradient-to-br from-black/60 to-indigo-950/20 backdrop-filter backdrop-blur-md border border-white/10 rounded-2xl shadow-lg hover:shadow-[#7ccf00]/10 hover:border-[#7ccf00]/20 transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://s3.palapacloud.id/amdalnet/public/berita/_DEC2485.jpg" alt="News thumbnail"
                     class="w-full h-64 object-cover transform group-hover:scale-105 transition-all duration-700 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent opacity-80"></div>
                    <div class="absolute bottom-0 left-0 w-full p-5">
                    <div class="flex items-center space-x-2">
                        <span class="bg-black/40 backdrop-blur-sm text-white/90 px-3 py-1 rounded-full text-xs font-medium border border-white/10">{{ 11 - $i % 10 }} Desember 2024</span>
                    </div>
                    <h3 class="text-white font-bold text-xl mt-3 group-hover:text-[#7ccf00] transition-colors duration-300 line-clamp-2">{{ ['Implementasi Sistem Monitoring Lingkungan Terbaru', 'Kebijakan Pengelolaan Limbah untuk Industri', 'Teknologi Hijau untuk Smart City', 'Mitigasi Perubahan Iklim di Indonesia'][$i % 4] }}</h3>
                    </div>
                </div>
                <div class="p-5 pt-4 flex-grow flex flex-col">
                    <p class="text-gray-300 text-sm mb-5 flex-grow line-clamp-3">
                    {{ ['Jakarta, 11 Desember 2024 - Kementerian Lingkungan Hidup memperkenalkan sistem baru untuk monitoring kualitas lingkungan yang mengintegrasikan teknologi IoT dan AI untuk pemantauan real-time.',
                    'Pemerintah mengeluarkan kebijakan baru terkait pengelolaan limbah industri yang bertujuan untuk mengurangi dampak negatif terhadap lingkungan dan mendorong ekonomi sirkular.',
                    'Smart city di Indonesia mulai mengadopsi teknologi hijau untuk mengurangi emisi karbon dan meningkatkan efisiensi energi dalam pengelolaan kota.',
                    'Program mitigasi perubahan iklim baru diluncurkan untuk mengurangi emisi gas rumah kaca dan mempersiapkan masyarakat menghadapi dampak perubahan iklim.'][$i % 4] }}
                    </p>
                    <a href="#" class="inline-flex items-center text-[#7ccf00] hover:text-white font-medium text-sm transition-all duration-300 group-hover:translate-x-1 mt-auto">
                    Baca selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    </a>
                </div>
                </div>
            </div>
            @endfor
            </div>
        </div>

        <!-- Konten Video -->
        <div id="videoContent" class="transition-all transform duration-500 opacity-0 hidden">
            <!-- Video Utama -->
            <div class="mb-12 rounded-2xl transform transition-all duration-500 group">
                <div class="bg-gradient-to-br from-black/80 to-blue-950/50 backdrop-blur-md border border-white/10 overflow-hidden rounded-2xl">
                    <div class="lg:flex">
                        <div class="lg:w-3/5 xl:w-2/3 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#487fff]/30 to-purple-500/30 mix-blend-overlay opacity-50"></div>
                            <div class="h-[400px] lg:h-full">
                                <div class="featured-video-preview relative h-full group">
                                    <img src="https://s3.palapacloud.id/amdalnet/public/berita/_DEC2485.jpg" alt="Featured video thumbnail"
                                         class="w-full h-full object-cover brightness-[0.8] group-hover:brightness-[0.9] transition-all duration-500 group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="transform group-hover:scale-110 transition-all duration-500">
                                            <div class="relative">
                                                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#487fff] to-[#487fff] blur-xl opacity-70 group-hover:opacity-100 transition-opacity duration-300 scale-125"></div>
                                                <button class="relative bg-gradient-to-r from-[#487fff] to-[#487fff] hover:from-[#487fff] hover:to-[#487fff] rounded-full p-6 shadow-lg group-hover:shadow-[#487fff]/30 transition-all duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="white" stroke-width="0">
                                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ripple-effect"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-2/5 xl:w-1/3 p-8 lg:p-12 flex flex-col justify-center relative lg:min-h-[500px]">
                            <div class="absolute inset-y-0 left-0 w-1 bg-gradient-to-b from-[#487fff] via-[#487fff] to-purple-400 rounded-full hidden lg:block transform transition-transform duration-500 group-hover:scale-y-110"></div>
                            <div class="featured-content">
                                <div class="flex items-center space-x-2 mb-3">
                                    <svg class="w-5 h-5 text-[#487fff]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[#487fff] text-sm font-medium">10 Desember 2024</span>
                                </div>
                                <h3 class="text-white font-black text-3xl my-4 leading-tight group-hover:text-[#487fff] transition-colors duration-300">
                                    Tutorial Lengkap Penggunaan Aplikasi Perling
                                </h3>
                                <p class="text-gray-300 mb-8 line-clamp-3 text-lg">
                                    Video tutorial lengkap ini akan membantu Anda memahami semua fitur dan kemampuan dari aplikasi Perling terbaru yang dikeluarkan Kementerian Lingkungan Hidup...
                                </p>
                                <div>
                                    <a href="#" class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#487fff] to-[#487fff] text-white text-sm font-medium rounded-lg overflow-hidden relative transition-all duration-300 hover:pr-9 hover:shadow-lg hover:shadow-[#487fff]/20">
                                        <span>Tonton Video</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform translate-x-0 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="absolute right-0 w-8 h-full translate-x-full group-hover:translate-x-0 transition-transform duration-300 bg-white/10 flex items-center justify-center"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Tambahan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @for($i = 0; $i < 3; $i++)
                <div class="video-card perspective-card group transform hover:-translate-y-1 transition-all duration-500 overflow-hidden">
                    <div class="h-full flex flex-col bg-gradient-to-br from-black/60 to-blue-950/20 backdrop-filter backdrop-blur-md border border-white/10 rounded-2xl shadow-lg hover:shadow-[#487fff]/10 hover:border-[#487fff]/20 transition-all duration-300 transform-3d group-hover:rotate-y-2 group-hover:rotate-x-2">
                        <div class="relative overflow-hidden">
                            <div class="video-preview h-64 cursor-pointer">
                                <img src="https://s3.palapacloud.id/amdalnet/public/berita/_DEC2485.jpg" alt="Video thumbnail"
                                     class="w-full h-full object-cover brightness-[0.85] group-hover:brightness-100 transition-all duration-500 transform group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="transform group-hover:scale-110 transition-transform duration-500">
                                        <button class="bg-gradient-to-r from-[#487fff]/90 to-[#487fff]/90 hover:from-[#487fff] hover:to-[#487fff] rounded-full p-4 shadow-lg transition-all duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="white" stroke-width="0">
                                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 flex-grow flex flex-col">
                            <h3 class="text-white font-bold text-xl mb-3 group-hover:text-[#487fff] transition-colors duration-300 line-clamp-2">
                                {{ ['Wawancara dengan Menteri LHK', 'Pembahasan UU Perlindungan Lingkungan', 'Tips Implementasi Kebijakan Lingkungan', 'Diskusi Panel: Masa Depan Energi Hijau', 'Panduan Lengkap AMDAL', 'Workshop Perling untuk Pemda'][$i % 6] }}
                            </h3>
                            <p class="text-gray-300 text-sm mb-5 flex-grow line-clamp-2">
                                {{ ['Menteri Lingkungan Hidup dan Kehutanan berbicara tentang kebijakan terbaru dan rencana strategis...',
                                'Diskusi mendalam mengenai UU Perlindungan Lingkungan yang baru disahkan dan implikasinya...',
                                'Panduan praktis untuk mengimplementasikan kebijakan lingkungan yang efektif di daerah...',
                                'Para ahli membahas tren dan inovasi dalam pengembangan energi hijau di Indonesia...',
                                'Penjelasan detail tentang proses AMDAL dan perubahan terbaru dalam regulasinya...',
                                'Workshop khusus untuk pemerintah daerah dalam menggunakan aplikasi Perling...'][$i % 6] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Enhanced "See More" button with 3D effect -->
        <div class="flex justify-center mt-20">
            <a href="/news" class="inline-flex items-center px-8 py-3 bg-lime-500 text-white font-medium rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-[#487fff]/20 hover:-translate-y-1">
            <span>Lihat Selengkapnya</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7-7 7" />
            </svg>
            </a>
        </div>
    </div>
</div>

    <!-- ParticlesJS script -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof particlesJS !== 'undefined') {
                particlesJS('particles-js', {
                    particles: {
                        number: { value: 80, density: { enable: true, value_area: 1000 } },
                        color: { value: "#ffffff" },
                        shape: { type: "circle" },
                        opacity: { value: 0.1, random: true },
                        size: { value: 3, random: true },
                        line_linked: {
                            enable: true, distance: 150,
                            color: "#ffffff", opacity: 0.05, width: 1
                        },
                        move: {
                            enable: true, speed: 0.5, direction: "none",
                            random: true, out_mode: "out", bounce: false
                        }
                    },
                    interactivity: {
                        detect_on: "canvas",
                        events: {
                            onhover: { enable: true, mode: "bubble" },
                            resize: true
                        },
                        modes: {
                            bubble: { distance: 200, size: 4, duration: 2, opacity: 0.2 }
                        }
                    },
                    retina_detect: true
                });
            }

            // Parallax effect image utama
            initParallaxEffect();

            initHoverEffects();
        });

        function initParallaxEffect() {
            const parallaxContainers = document.querySelectorAll('.parallax-container');

            parallaxContainers.forEach(container => {
                const img = container.querySelector('.parallax-img');

                if (img) {
                    container.addEventListener('mousemove', (e) => {
                        const rect = container.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;

                        const xPercent = (x / rect.width - 0.5) * 2; // -1 to 1
                        const yPercent = (y / rect.height - 0.5) * 2; // -1 to 1

                        img.style.transform = `translate(${xPercent * -10}px, ${yPercent * -10}px) scale(1.1)`;
                    });

                    container.addEventListener('mouseleave', () => {
                        img.style.transform = 'translate(0, 0) scale(1.05)';
                    });
                }
            });
        }

        function initHoverEffects() {
            const perspectiveCards = document.querySelectorAll('.perspective-card');

            perspectiveCards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const xPercent = (x / rect.width - 0.5) * 2; // -1 to 1
                    const yPercent = (y / rect.height - 0.5) * -2; // -1 to 1

                    const inner = card.querySelector('.transform-3d');
                    if (inner) {
                        inner.style.transform = `rotateY(${xPercent * 5}deg) rotateX(${yPercent * 5}deg)`;
                    }
                });

                card.addEventListener('mouseleave', () => {
                    const inner = card.querySelector('.transform-3d');
                    if (inner) {
                        inner.style.transform = 'rotateY(0) rotateX(0)';
                    }
                });
            });
        }

        function switchTab(tabName) {
            const beritaContent = document.getElementById('beritaContent');
            const videoContent = document.getElementById('videoContent');
            const beritaTab = document.getElementById('beritaTab');
            const videoTab = document.getElementById('videoTab');

            if (tabName === 'berita') {
                // Update tab styles
                beritaTab.classList.add('bg-gradient-to-r', 'from-[#7ccf00]/80', 'to-[#7ccf00]/80', 'text-white');
                beritaTab.classList.remove('bg-white/5', 'text-white/80');
                videoTab.classList.remove('bg-gradient-to-r', 'from-[#487fff]/80', 'to-[#487fff]/80', 'text-white');
                videoTab.classList.add('bg-white/5', 'text-white/80');

                // Enhanced transition effects
                beritaContent.style.transform = 'translateX(20px)';
                beritaContent.style.opacity = '0';

                setTimeout(() => {
                    videoContent.classList.add('hidden');
                    beritaContent.classList.remove('hidden');

                    requestAnimationFrame(() => {
                        beritaContent.style.transform = 'translateX(0)';
                        beritaContent.style.opacity = '1';
                    });
                }, 300);

            } else {
                videoTab.classList.add('bg-gradient-to-r', 'from-[#487fff]/80', 'to-[#487fff]/80', 'text-white');
                videoTab.classList.remove('bg-white/5', 'text-white/80');
                beritaTab.classList.remove('bg-gradient-to-r', 'from-[#7ccf00]/80', 'to-[#7ccf00]/80', 'text-white');
                beritaTab.classList.add('bg-white/5', 'text-white/80');

                videoContent.style.transform = 'translateX(20px)';
                videoContent.style.opacity = '0';
                beritaContent.style.opacity = '0';
                beritaContent.style.transform = 'translateX(-20px)';

                setTimeout(() => {
                    beritaContent.classList.add('hidden');
                    videoContent.classList.remove('hidden');

                    requestAnimationFrame(() => {
                        videoContent.style.transform = 'translateX(0)';
                        videoContent.style.opacity = '1';
                    });
                }, 300);
            }
        }
    </script>

    <style>
        @keyframes gradient-x {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 3s ease infinite;
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.7; }
        }
        .animate-pulse-slow {
            animation: pulse-slow 6s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        .animate-float-slow {
            animation: float 12s ease-in-out infinite;
        }
        .animate-float-slow-reverse {
            animation: float 12s ease-in-out infinite reverse;
        }

        @keyframes float-text {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px) rotate(2deg); }
        }
        .animate-float-text {
            animation: float-text 2s ease-in-out infinite;
            display: inline-block;
        }

        @keyframes subtle-rotate {
            0%, 100% { transform: rotate(-1deg); }
            50% { transform: rotate(1deg); }
        }
        .animate-subtle-rotate {
            animation: subtle-rotate 12s ease-in-out infinite;
        }

        /* efek 3d */
        .perspective {
            perspective: 1000px;
        }
        .perspective-hero {
            perspective: 2000px;
        }
        .perspective-card {
            perspective: 1000px;
            transform-style: preserve-3d;
        }
        .transform-3d {
            transform-style: preserve-3d;
            transition: transform 0.6s cubic-bezier(0.2, 0.85, 0.4, 1);
        }

        .glow-line {
            box-shadow: 0 0 15px 2px rgba(124, 207, 0, 0.6);
            animation: glow-pulse 3s ease-in-out infinite alternate;
        }
        @keyframes glow-pulse {
            0% { box-shadow: 0 0 10px 1px rgba(124, 207, 0, 0.5); }
            100% { box-shadow: 0 0 25px 5px rgba(124, 207, 0, 0.8); }
        }

        .ripple-effect {
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: rgba(72, 127, 255, 0.4);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            animation: ripple 2s linear infinite;
        }
        @keyframes ripple {
            0% { transform: translate(-50%, -50%) scale(1); opacity: 0; }
            20% { transform: translate(-50%, -50%) scale(1.2); opacity: 0.6; }
            100% { transform: translate(-50%, -50%) scale(2); opacity: 0; }
        }

        .masonry-card-wide {
            grid-row: span 1;
        }
        @media (min-width: 1024px) {
            .masonry-card:nth-child(4n+1) {
                grid-row: span 2;
            }
        }

        #beritaContent, #videoContent {
            transition: all 0.5s cubic-bezier(0.2, 0.85, 0.4, 1);
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .tab-glass-container {
            position: relative;
            z-index: 1;
        }
        .tab-glass-container::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: -1;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border-radius: inherit;
        }
    </style>
</section>
