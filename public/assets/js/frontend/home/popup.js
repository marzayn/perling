document.addEventListener("DOMContentLoaded", function () {
    // Show popup with slight delay after page load
    setTimeout(function () {
        document.getElementById("popupBanner").classList.remove("hidden");
    }, 800);

    // Close popup when clicking the close button
    document
        .getElementById("closePopup")
        .addEventListener("click", function () {
            document.getElementById("popupBanner").classList.add("hidden");
        });

    // Close popup when clicking outside the banner
    document
        .getElementById("popupBanner")
        .addEventListener("click", function (e) {
            if (e.target === this) {
                this.classList.add("hidden");
            }
        });

    // Slider functionality
    const slides = document.querySelectorAll(".banner-slide");
    const dots = document.querySelectorAll(".dot-indicator");
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide) => slide.classList.add("hidden"));
        dots.forEach((dot) => dot.classList.remove("active"));

        slides[index].classList.remove("hidden");
        dots[index].classList.add("active");
        currentSlide = index;
    }

    // Auto slide every 5 seconds
    let slideInterval = setInterval(() => {
        let nextSlide = (currentSlide + 1) % slides.length;
        showSlide(nextSlide);
    }, 5000);

    // Navigation buttons
    document.getElementById("nextSlide").addEventListener("click", function () {
        clearInterval(slideInterval);
        let nextSlide = (currentSlide + 1) % slides.length;
        showSlide(nextSlide);
        slideInterval = setInterval(() => {
            nextSlide = (currentSlide + 1) % slides.length;
            showSlide(nextSlide);
        }, 5000);
    });

    document.getElementById("prevSlide").addEventListener("click", function () {
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
        dot.addEventListener("click", function () {
            clearInterval(slideInterval);
            showSlide(index);
            slideInterval = setInterval(() => {
                let nextSlide = (currentSlide + 1) % slides.length;
                showSlide(nextSlide);
            }, 5000);
        });
    });
});
