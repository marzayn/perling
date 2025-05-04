$(document).ready(function () {
    $(".select2").select2({
        allowClear: true,
        width: "100%",
    });

    // Toggle section content when header is clicked
    $(".section-header").on("click", function () {
        // Toggle the collapse state
        $(this).toggleClass("active");
        // Toggle the dropdown arrow rotation
        $(this).find(".dropdown-arrow").toggleClass("rotated");
    });
});
function togglePengolahanFields() {
    const selection = document.getElementById("pengolahanAirLimbah").value;
    const additionalFields = document.getElementById(
        "pengolahanAdditionalFields"
    );

    if (selection === "Ya") {
        additionalFields.classList.remove("d-none");
        additionalFields.classList.add("d-block");
    } else {
        additionalFields.classList.remove("d-block");
        additionalFields.classList.add("d-none");
    }
}
function toggleEmisiFields() {
    const selection = document.getElementById("emisiAirLimbah").value;
    const additionalFields = document.getElementById("emisiAdditionalFields");

    if (selection === "Ya") {
        additionalFields.classList.remove("d-none");
        additionalFields.classList.add("d-block");
    } else {
        additionalFields.classList.remove("d-block");
        additionalFields.classList.add("d-none");
    }
}
