@push('script')
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="{{ asset('assets/js/frontend/home/news.js') }}"></script>
@endpush

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/frontend/home/news.css') }}">
@endpush

@php
    $featuredNews = $newsItems[0] ?? null;
    $otherNews    = array_slice($newsItems, 1, 3);

    $featuredVideo = $videoItems[0] ?? null;
    $otherVideos   = array_slice($videoItems, 1, 3);
@endphp

<section class="news-section relative overflow-hidden py-20 bg-gradient-to-b from-[#0c1a3f] via-[#0c2a6f] to-[#0c1a3f]">
    <div class="container max-w-6xl mx-auto">
    <div class="absolute inset-0">
        <div id="particles-js" class="absolute inset-0 opacity-30"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(12,42,111,0.8),rgba(8,8,40,0.9))] mix-blend-multiply"></div>
    </div>

    <div class="absolute w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-1/5 left-10 w-80 h-80 rounded-full mix-blend-screen opacity-10 animate-float-slow" style="background: radial-gradient(circle, rgba(139,92,246,0.8) 0%, rgba(76,29,149,0) 70%); filter: blur(60px);"></div>
        <div class="absolute bottom-1/4 right-5 w-96 h-96 rounded-full mix-blend-screen opacity-10 animate-float-slow-reverse" style="background: radial-gradient(circle, rgba(72,127,255,0.8) 0%, rgba(8,145,178,0) 70%); filter: blur(70px); animation-delay: 2s;"></div>
        <div class="absolute top-2/3 left-1/4 w-72 h-72 rounded-full mix-blend-screen opacity-10 animate-float" style="background: radial-gradient(circle, rgba(124,207,0,0.6) 0%, rgba(5,150,105,0) 70%); filter: blur(60px); animation-delay: 3s;"></div>
    </div>

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-16 perspective-hero relative z-10">
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

            <div class="lg:w-auto transform transition-all duration-500 hover:translate-y-[-5px]">
                <div class="relative flex flex-row sm:flex-row p-1 sm:p-1.5 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl z-10 tab-glass-container">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-[#487fff]/20 to-purple-500/20 blur-xl transform scale-[0.96] z-0"></div>
                    <div class="absolute -inset-0.5 rounded-2xl bg-gradient-to-r from-[#487fff]/30 to-purple-500/30 blur opacity-50 transform animate-pulse-slow"></div>
                    <button id="beritaTab" onclick="switchTab('berita')" class="relative group z-20 px-4 sm:px-6 md:px-8 py-3 sm:py-4 text-base sm:text-lg font-medium transition-all duration-500 ease-out bg-gradient-to-r from-[#00c950]/80 to-[#00c950]/80 text-white rounded-xl m-1 hover:shadow-lg w-full sm:w-auto">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#134402] to-[#00c950] rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 blur-xl -z-10"></div>
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
                <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-gradient-to-br from-[#00c950]/30 to-[#487fff]/30 rounded-full blur-xl opacity-70 animate-pulse-slow hidden lg:block"></div>
            </div>
        </div>

        <!-- Konten Berita -->
        <div id="beritaContent" class="transition-all transform duration-500 opacity-100">
            @if($featuredNews)
            <div class="mb-12 rounded-2xl transform transition-all duration-500 group">
            <div class="bg-gradient-to-br from-black/80 to-indigo-950/50 backdrop-blur-md border border-white/10 overflow-hidden rounded-2xl">
                <div class="lg:flex">
                <div class="lg:w-3/5 xl:w-2/3 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#00c950]/40 to-[#487fff]/40 mix-blend-overlay opacity-50"></div>
                    <div class="parallax-container h-[400px] lg:h-full overflow-hidden">
                    <img src="{{ $featuredNews['thumbnail'] }}" alt="Featured news"
                         class="w-full h-full object-cover parallax-img transform transition-transform duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                    </div>
                </div>
                <div class="lg:w-2/5 xl:w-1/3 p-8 lg:p-12 flex flex-col justify-center relative lg:min-h-[500px]">
                    <div class="absolute inset-y-0 left-0 w-1 bg-gradient-to-b from-[#00c950] via-[#00c950] to-[#487fff] rounded-full hidden lg:block transform transition-transform duration-500 group-hover:scale-y-110"></div>
                    <div class="featured-content">
                    <div class="flex items-center space-x-2 mb-3">
                        <svg class="w-5 h-5 text-[#00c950]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-[#00c950] text-sm font-medium"> {{ \Carbon\Carbon::parse($featuredNews['date'])->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                    </div>
                    <h3 class="text-white font-black text-3xl my-4 leading-tight group-hover:text-[#00c950] transition-colors duration-300">
                        {{ $featuredNews['title'] }}
                    </h3>
                    <p class="text-gray-300 mb-8 line-clamp-3 text-lg">
                        {{ $featuredNews['description'] }}
                    </p>
                    <div>
                        <a href="{{ route('news.detail') }}" class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#00c950] to-[#00c950] text-white text-sm font-medium rounded-lg overflow-hidden relative transition-all duration-300 hover:pr-9 hover:shadow-lg hover:shadow-[#00c950]/20">
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
            @endif

            <!-- 3 Berita Tambahan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach($otherNews as $news)
            <div class="news-card group transform hover:-translate-y-1 transition-all duration-500 overflow-hidden">
                <div class="h-full flex flex-col bg-gradient-to-br from-black/60 to-indigo-950/20 backdrop-filter backdrop-blur-md border border-white/10 rounded-2xl shadow-lg hover:shadow-[#00c950]/10 hover:border-[#00c950]/20 transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="{{ $news['thumbnail'] }}" alt="News thumbnail"
                     class="w-full h-64 object-cover transform group-hover:scale-105 transition-all duration-700 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent opacity-80"></div>
                    <div class="absolute bottom-0 left-0 w-full p-5">
                    <div class="flex items-center space-x-2">
                        <span class="bg-black/40 backdrop-blur-sm text-white/90 px-3 py-1 rounded-full text-xs font-medium border border-white/10">{{ \Carbon\Carbon::parse($news['date'])->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                    </div>
                    <h3 class="text-white font-bold text-xl mt-3 group-hover:text-[#00c950] transition-colors duration-300 line-clamp-2">{{ $news['title'] }}</h3>
                    </div>
                </div>
                <div class="p-5 pt-4 flex-grow flex flex-col">
                    <p class="text-gray-300 text-sm mb-5 flex-grow line-clamp-3">
                        {{ $news['description'] }}
                    </p>
                    <a href="#" class="inline-flex items-center text-[#00c950] hover:text-white font-medium text-sm transition-all duration-300 group-hover:translate-x-1 mt-auto">
                    Baca selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    </a>
                </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>

        <!-- Konten Video -->
        <div id="videoContent" class="transition-all transform duration-500 opacity-0 hidden">
            @if($featuredVideo)
            <!-- Video Utama -->
            <div class="mb-12 rounded-2xl transform transition-all duration-500 group">
                <div class="bg-gradient-to-br from-black/80 to-blue-950/50 backdrop-blur-md border border-white/10 overflow-hidden rounded-2xl">
                    <div class="lg:flex">
                        <div class="lg:w-3/5 xl:w-2/3 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#487fff]/30 to-purple-500/30 mix-blend-overlay opacity-50"></div>
                            <div class="h-[400px] lg:h-full">
                                <div class="featured-video-preview relative h-full group">
                                    <img src="{{ $featuredVideo['thumbnail'] }}" alt="Featured video thumbnail"
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
                                    <span class="text-[#487fff] text-sm font-medium"> {{ \Carbon\Carbon::parse($news['date'])->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                                </div>
                                <h3 class="text-white font-black text-3xl my-4 leading-tight group-hover:text-[#487fff] transition-colors duration-300">
                                    {{ $featuredVideo['title'] }}
                                </h3>
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
            @endif

            <!-- Video Tambahan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @foreach($otherVideos as $video)
                <div class="video-card perspective-card group transform hover:-translate-y-1 transition-all duration-500 overflow-hidden">
                    <div class="h-full flex flex-col bg-gradient-to-br from-black/60 to-blue-950/20 backdrop-filter backdrop-blur-md border border-white/10 rounded-2xl shadow-lg hover:shadow-[#487fff]/10 hover:border-[#487fff]/20 transition-all duration-300 transform-3d group-hover:rotate-y-2 group-hover:rotate-x-2">
                        <div class="relative overflow-hidden">
                            <div class="video-preview h-64 cursor-pointer">
                                <img src="{{ $video['thumbnail'] }}" alt="Video thumbnail"
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
                               {{ $video['title'] }}
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="flex justify-center mt-20">
            <a href="/news" class="inline-flex items-center px-8 py-3 bg-green-500 text-white font-medium rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-[#487fff]/20 hover:-translate-y-1">
            <span>Lihat Selengkapnya</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7-7 7" />
            </svg>
            </a>
        </div>
    </div>
</div>
</section>
