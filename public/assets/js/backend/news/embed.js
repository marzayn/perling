document.addEventListener("DOMContentLoaded", function () {
    const categorySelect = document.getElementById("category-select");
    const embedField = document.getElementById("embed-link-field");

    function toggleEmbedField() {
        if (categorySelect.value === "Video") {
            embedField.classList.remove("d-none");
        } else {
            embedField.classList.add("d-none");
        }
    }

    toggleEmbedField();

    categorySelect.addEventListener("change", toggleEmbedField);
});
