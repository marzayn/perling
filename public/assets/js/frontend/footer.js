document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("marquee-container");
    const content = document.getElementById("marquee-content");

    // Calculate the total width needed for animation
    let contentWidth = content.offsetWidth;

    // Clone the content multiple times to ensure smooth looping
    for (let i = 0; i < 3; i++) {
        const clone = content.cloneNode(true);
        container.appendChild(clone);
    }

    // Start animation
    let scrollPosition = 0;
    const speed = 0.5; // slower speed (was 1)
    let isAnimating = true;

    // Pause on hover
    container.addEventListener("mouseenter", function () {
        isAnimating = false;
    });

    container.addEventListener("mouseleave", function () {
        isAnimating = true;
    });

    function scroll() {
        if (isAnimating) {
            scrollPosition -= speed;
            // Reset when first element is completely scrolled out
            if (scrollPosition <= -contentWidth) {
                scrollPosition += contentWidth;
            }
            container.style.transform = `translateX(${scrollPosition}px)`;
        }
        requestAnimationFrame(scroll);
    }

    // Start the animation
    scroll();
});
