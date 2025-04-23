// Mobile Menu Toggle
const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
const mobileMenuClose = document.getElementById("mobile-menu-close");
const mobileMenu = document.getElementById("mobile-menu");

mobileMenuToggle.addEventListener("click", () => {
    mobileMenu.classList.remove("-translate-x-full");
});

mobileMenuClose.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
});

// Mobile Submenu Toggle
const mobileSubmenuToggles = document.querySelectorAll(
    ".mobile-submenu-toggle"
);
mobileSubmenuToggles.forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
        const submenu = e.currentTarget.nextElementSibling;
        const svg = e.currentTarget.querySelector("svg");

        submenu.classList.toggle("hidden");
        svg.classList.toggle("rotate-180");
    });
});
