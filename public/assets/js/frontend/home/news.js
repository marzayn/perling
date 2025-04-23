document.addEventListener("DOMContentLoaded", function () {
    if (typeof particlesJS !== "undefined") {
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 80,
                    density: { enable: true, value_area: 1000 },
                },
                color: { value: "#ffffff" },
                shape: { type: "circle" },
                opacity: { value: 0.1, random: true },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.05,
                    width: 1,
                },
                move: {
                    enable: true,
                    speed: 0.5,
                    direction: "none",
                    random: true,
                    out_mode: "out",
                    bounce: false,
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "bubble" },
                    resize: true,
                },
                modes: {
                    bubble: {
                        distance: 200,
                        size: 4,
                        duration: 2,
                        opacity: 0.2,
                    },
                },
            },
            retina_detect: true,
        });
    }

    // Parallax effect image utama
    initParallaxEffect();

    initHoverEffects();
});

function initParallaxEffect() {
    const parallaxContainers = document.querySelectorAll(".parallax-container");

    parallaxContainers.forEach((container) => {
        const img = container.querySelector(".parallax-img");

        if (img) {
            container.addEventListener("mousemove", (e) => {
                const rect = container.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const xPercent = (x / rect.width - 0.5) * 2; // -1 to 1
                const yPercent = (y / rect.height - 0.5) * 2; // -1 to 1

                img.style.transform = `translate(${xPercent * -10}px, ${
                    yPercent * -10
                }px) scale(1.1)`;
            });

            container.addEventListener("mouseleave", () => {
                img.style.transform = "translate(0, 0) scale(1.05)";
            });
        }
    });
}

function initHoverEffects() {
    const perspectiveCards = document.querySelectorAll(".perspective-card");

    perspectiveCards.forEach((card) => {
        card.addEventListener("mousemove", (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const xPercent = (x / rect.width - 0.5) * 2; // -1 to 1
            const yPercent = (y / rect.height - 0.5) * -2; // -1 to 1

            const inner = card.querySelector(".transform-3d");
            if (inner) {
                inner.style.transform = `rotateY(${xPercent * 5}deg) rotateX(${
                    yPercent * 5
                }deg)`;
            }
        });

        card.addEventListener("mouseleave", () => {
            const inner = card.querySelector(".transform-3d");
            if (inner) {
                inner.style.transform = "rotateY(0) rotateX(0)";
            }
        });
    });
}

function switchTab(tabName) {
    const beritaContent = document.getElementById("beritaContent");
    const videoContent = document.getElementById("videoContent");
    const beritaTab = document.getElementById("beritaTab");
    const videoTab = document.getElementById("videoTab");

    if (tabName === "berita") {
        // Update tab styles
        beritaTab.classList.add(
            "bg-gradient-to-r",
            "from-[#00c950]/80",
            "to-[#00c950]/80",
            "text-white"
        );
        beritaTab.classList.remove("bg-white/5", "text-white/80");
        videoTab.classList.remove(
            "bg-gradient-to-r",
            "from-[#487fff]/80",
            "to-[#487fff]/80",
            "text-white"
        );
        videoTab.classList.add("bg-white/5", "text-white/80");

        // Enhanced transition effects
        beritaContent.style.transform = "translateX(20px)";
        beritaContent.style.opacity = "0";

        setTimeout(() => {
            videoContent.classList.add("hidden");
            beritaContent.classList.remove("hidden");

            requestAnimationFrame(() => {
                beritaContent.style.transform = "translateX(0)";
                beritaContent.style.opacity = "1";
            });
        }, 300);
    } else {
        videoTab.classList.add(
            "bg-gradient-to-r",
            "from-[#487fff]/80",
            "to-[#487fff]/80",
            "text-white"
        );
        videoTab.classList.remove("bg-white/5", "text-white/80");
        beritaTab.classList.remove(
            "bg-gradient-to-r",
            "from-[#00c950]/80",
            "to-[#00c950]/80",
            "text-white"
        );
        beritaTab.classList.add("bg-white/5", "text-white/80");

        videoContent.style.transform = "translateX(20px)";
        videoContent.style.opacity = "0";
        beritaContent.style.opacity = "0";
        beritaContent.style.transform = "translateX(-20px)";

        setTimeout(() => {
            beritaContent.classList.add("hidden");
            videoContent.classList.remove("hidden");

            requestAnimationFrame(() => {
                videoContent.style.transform = "translateX(0)";
                videoContent.style.opacity = "1";
            });
        }, 300);
    }
}
