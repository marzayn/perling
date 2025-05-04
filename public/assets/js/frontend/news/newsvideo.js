document.addEventListener("DOMContentLoaded", function () {
    const loadMoreBtn = document.getElementById("load-more-btn");
    const newsContainer = document.getElementById("news-container");
    const videoContainer = document.getElementById("video-container");
    const newsContent = document.getElementById("news-content");
    const videoContent = document.getElementById("videos-content");
    const tabs = document.querySelectorAll(".tab-btn");
    const tabIndicator = document.getElementById("tab-indicator");

    let newsOffset = 0;
    let videoOffset = 0;
    const itemsPerLoad = 3;

    setTabIndicatorPosition(tabs[0]);
    tabs[0].classList.add("text-white", "font-medium");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            setTabIndicatorPosition(tab);

            tabs.forEach((t) => {
                t.classList.remove("text-white", "font-medium");
                t.classList.add("text-gray-600");
            });
            tab.classList.add("text-white", "font-medium");
            tab.classList.remove("text-gray-600");

            const targetTab = tab.getAttribute("data-tab");
            document.querySelectorAll(".tab-content").forEach((content) => {
                content.classList.add("hidden");
            });
            document
                .getElementById(`${targetTab}-content`)
                .classList.remove("hidden");

            // Update button visibility when switching tabs
            updateLoadMoreButtonVisibility();
        });
    });

    function setTabIndicatorPosition(activeTab) {
        tabIndicator.style.width = `${activeTab.offsetWidth}px`;
        tabIndicator.style.left = `${activeTab.offsetLeft}px`;
    }

    function updateLoadMoreButtonVisibility() {
        if (newsContent.classList.contains("hidden") === false) {
            if (newsOffset >= moreArticles.length) {
                loadMoreBtn.classList.add("hidden");
            } else {
                loadMoreBtn.classList.remove("hidden");
            }
        } else {
            if (videoOffset >= moreVideos.length) {
                loadMoreBtn.classList.add("hidden");
            } else {
                loadMoreBtn.classList.remove("hidden");
            }
        }
    }

    const moreArticles = [
        {
            image: "https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png",
            title: "Panduan Lengkap Perizinan AMDAL Terbaru",
            description:
                "Prosedur dan persyaratan terbaru untuk mendapatkan persetujuan AMDAL dalam proyek pembangunan skala besar di Indonesia...",
            published_date: "10 April 2025",
            slug: "panduan-perizinan-amdal-terbaru",
        },
        {
            image: "https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png",
            title: "Regulasi UKL-UPL: Apa yang Perlu Diketahui",
            description:
                "Panduan praktis tentang dokumen Upaya Pengelolaan Lingkungan dan Upaya Pemantauan Lingkungan untuk usaha skala menengah...",
            published_date: "12 April 2025",
            slug: "regulasi-ukl-upl-terbaru",
        },
        {
            image: "https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png",
            title: "Perubahan Kebijakan Perizinan Lingkungan 2025",
            description:
                "Analisis mendalam tentang perubahan kebijakan perizinan lingkungan dan dampaknya terhadap sektor industri di Indonesia...",
            published_date: "15 April 2025",
            slug: "perubahan-kebijakan-perizinan-lingkungan-2025",
        },
    ];
    const moreVideos = [
        {
            src: "https://www.w3schools.com/html/movie.mp4",
            title: "Tutorial Pengisian Formulir Izin Lingkungan",
            description:
                "Panduan langkah demi langkah cara mengisi formulir perizinan lingkungan dengan benar dan efisien...",
            date: "8 April 2025",
        },
        {
            src: "https://www.w3schools.com/html/movie.mp4",
            title: "Proses Sidang Perizinan Lingkungan: Apa yang Harus Dipersiapkan",
            description:
                "Penjelasan detail tentang tahapan sidang perizinan lingkungan dan tips sukses menghadapinya...",
            date: "11 April 2025",
        },
        {
            src: "https://www.w3schools.com/html/movie.mp4",
            title: "Studi Kasus: Penolakan Izin Lingkungan dan Solusinya",
            description:
                "Analisis kasus penolakan izin lingkungan dan strategi untuk mengatasi masalah perizinan yang umum terjadi...",
            date: "14 April 2025",
        },
    ];

    loadMoreBtn.addEventListener("click", function () {
        const loadingText = loadMoreBtn.innerHTML;
        loadMoreBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Loading...
        `;

        setTimeout(() => {
            if (newsContent.classList.contains("hidden") === false) {
                const remainingArticles = moreArticles.slice(
                    newsOffset,
                    newsOffset + itemsPerLoad
                );
                remainingArticles.forEach((article) => {
                    const articleElement = createArticleElement(article);
                    newsContainer.appendChild(articleElement);
                });
                newsOffset += remainingArticles.length;
            } else {
                const remainingVideos = moreVideos.slice(
                    videoOffset,
                    videoOffset + itemsPerLoad
                );
                remainingVideos.forEach((video) => {
                    const videoElement = createVideoElement(video);
                    videoContainer.appendChild(videoElement);
                });
                videoOffset += remainingVideos.length;
            }

            loadMoreBtn.innerHTML = loadingText;

            updateLoadMoreButtonVisibility();
        }, 1000);
    });

    updateLoadMoreButtonVisibility();

    function createArticleElement(article) {
        const div = document.createElement("div");
        div.className =
            "bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group";
        div.innerHTML = `
                <div class="relative overflow-hidden">
                    <img src="${article.image}" alt="${article.title}" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow-md">${article.published_date}</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-600 transition-colors">${article.title}</h3>
                    <p class="text-gray-600 mb-5 line-clamp-3">${article.description}</p>
                    <a href="/news/${article.slug}" class="inline-flex items-center text-blue-600 font-medium group-hover:text-blue-800 transition-colors">
                        <span>Baca Selengkapnya</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            `;
        return div;
    }

    function createVideoElement(video) {
        const div = document.createElement("div");
        div.className =
            "bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group";
        div.innerHTML = `
                <div class="relative overflow-hidden">
                    <video class="w-full h-56 object-cover" poster="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png" controls>
                        <source src="${video.src}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="bg-white/20 backdrop-blur-sm p-3 rounded-full">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-3 py-1 rounded-full">${video.date}</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-indigo-600 transition-colors">${video.title}</h3>
                    <p class="text-gray-600 mb-5 line-clamp-3">${video.description}</p>
                    <a href="#" class="inline-flex items-center text-indigo-600 font-medium group-hover:text-indigo-800 transition-colors">
                        <span>Tonton Video</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            `;
        return div;
    }
});
