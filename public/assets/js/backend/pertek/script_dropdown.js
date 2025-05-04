document.addEventListener("DOMContentLoaded", function () {
    // Get all dropdown headers
    const dropdownHeaders = document.querySelectorAll(".section-header");

    // Add click event to each header
    dropdownHeaders.forEach((header) => {
        header.addEventListener("click", function () {
            // Toggle active class on header
            this.classList.toggle("active");

            // Toggle the arrow rotation
            const arrow = this.querySelector(".dropdown-arrow");
            arrow.classList.toggle("rotated");

            // Update headers and arrows after Bootstrap changes the collapse state
            setTimeout(() => {
                const isExpanded =
                    this.getAttribute("aria-expanded") === "true";

                if (isExpanded) {
                    this.classList.add("active");
                    arrow.classList.add("rotated");
                } else {
                    this.classList.remove("active");
                    arrow.classList.remove("rotated");
                }
            }, 50);
        });

        // Set initial state
        const isInitiallyExpanded =
            header.getAttribute("aria-expanded") === "true";
        const arrow = header.querySelector(".dropdown-arrow");

        if (isInitiallyExpanded) {
            header.classList.add("active");
            arrow.classList.add("rotated");
        } else {
            header.classList.remove("active");
            arrow.classList.remove("rotated");
        }
    });
});
