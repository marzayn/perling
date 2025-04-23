document.querySelectorAll(".faq-header").forEach((header) => {
    header.addEventListener("click", () => {
        const parent = header.parentElement;
        const content = parent.querySelector(".faq-content");
        const toggle = parent.querySelector(".faq-toggle svg");

        document.querySelectorAll(".faq-item").forEach((item) => {
            if (item !== parent && item.classList.contains("active")) {
                item.classList.remove("active");
                item.querySelector(".faq-content").style.maxHeight = "0";
                item.querySelector(".faq-toggle svg").classList.remove(
                    "rotate-45"
                );
            }
        });

        parent.classList.toggle("active");

        if (parent.classList.contains("active")) {
            content.style.maxHeight = content.scrollHeight + "px";
            toggle.classList.add("rotate-45");
        } else {
            content.style.maxHeight = "0";
            toggle.classList.remove("rotate-45");
        }
    });
});
