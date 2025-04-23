document.getElementById("filter-button").addEventListener("click", function () {
    const filterSection = document.getElementById("filter-section");
    filterSection.classList.toggle("hidden");
});

document.getElementById("clear-filter").addEventListener("click", function () {
    // Reset province and city dropdowns
    document.getElementById("kabkota").value = "";
    document.getElementById("kecamatan").value = "";
    document.getElementById("kelurahan").value = "";

    // Reset search input
    const searchInput = document.querySelector('input[placeholder="Search"]');
    if (searchInput) searchInput.value = "";
});

function changeTab(tabName) {
    const contentSections = document.querySelectorAll(".tab-content");
    contentSections.forEach((section) => {
        section.classList.add("hidden");
    });

    const tabButtons = document.querySelectorAll(".tab-btn");
    tabButtons.forEach((button) => {
        button.classList.remove("bg-blue-900", "text-white");
        button.classList.add("bg-white", "border", "border-gray-300");
    });

    const selectedTab = document.getElementById("tab-" + tabName);
    selectedTab.classList.remove("bg-white", "border", "border-gray-300");
    selectedTab.classList.add("bg-blue-900", "text-white");

    const selectedContent = document.getElementById("content-" + tabName);
    selectedContent.classList.remove("hidden");
}

document.addEventListener("DOMContentLoaded", function () {
    changeTab("pertek");
});
