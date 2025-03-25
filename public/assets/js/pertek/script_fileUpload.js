document.addEventListener("DOMContentLoaded", function () {
    // Process all file upload elements
    const fileInputs = document.querySelectorAll(".file-upload");
    const MAX_FILE_SIZE = 20 * 1024 * 1024; // 20MB in bytes

    // Function to show alert for a specific upload field
    function showAlert(message, type = "danger", targetElement) {
        // Create alert element
        const alertDiv = document.createElement("div");
        alertDiv.className = `alert alert-${type} alert-dismissible fade show mt-2`;
        alertDiv.role = "alert";
        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        // Insert after the target element
        targetElement.parentNode.insertBefore(
            alertDiv,
            targetElement.nextSibling
        );

        // Auto dismiss after 5 seconds
        setTimeout(() => {
            alertDiv.classList.remove("show");
            setTimeout(() => alertDiv.remove(), 150);
        }, 5000);
    }

    fileInputs.forEach((fileInput) => {
        const fileId = fileInput.id;
        const uploadBtn = document.querySelector(
            `[data-target="${fileId}"].upload-btn`
        );
        const uploadContainer = fileInput.closest(".input-group");
        const previewContainer = document.getElementById(`${fileId}Preview`);

        if (!previewContainer) return; // Skip if preview container doesn't exist

        // Find the small text element that says "Maks. berukuran 20 MB dan berformat pdf"
        const helpTextElement = uploadContainer
            .closest(".card-body")
            .querySelector("small.text-muted");

        const removeBtn = previewContainer.querySelector(".remove-file");
        let errorElement = uploadContainer.nextElementSibling;

        // If no error element exists, create one
        if (
            !errorElement ||
            !errorElement.classList.contains("wizard-form-error")
        ) {
            errorElement = document.createElement("div");
            errorElement.className = "wizard-form-error text-danger mt-1";
            uploadContainer.parentNode.insertBefore(
                errorElement,
                uploadContainer.nextSibling
            );
        }

        // Process file upload and show preview
        function processFileUpload() {
            const file = fileInput.files[0];
            if (!file) return;

            // Validate file type (PDF only)
            if (file.type !== "application/pdf") {
                errorElement.textContent = "Hanya file PDF yang diperbolehkan";
                showAlert(
                    "Format file tidak valid! Hanya file PDF yang diperbolehkan.",
                    "danger",
                    helpTextElement
                );
                fileInput.value = ""; // Clear the input
                return;
            }

            // Validate file size (max 20MB)
            if (file.size > MAX_FILE_SIZE) {
                errorElement.textContent =
                    "Ukuran file tidak boleh melebihi 20MB";
                showAlert(
                    "Ukuran file terlalu besar! File tidak boleh melebihi 20MB.",
                    "danger",
                    helpTextElement
                );
                fileInput.value = ""; // Clear the input
                return;
            }

            // Clear any previous error
            errorElement.textContent = "";

            // Hide upload container when file is uploaded
            uploadContainer.classList.add("d-none");

            // Show preview
            previewContainer.classList.remove("d-none");

            // Update preview content
            const previewImg = previewContainer.querySelector(".preview-img");
            const previewIcon = previewContainer.querySelector(".preview-icon");
            const previewFilename =
                previewContainer.querySelector(".preview-filename");
            const previewFilesize =
                previewContainer.querySelector(".preview-filesize");

            // Set filename and filesize
            previewFilename.textContent = file.name;
            previewFilesize.textContent = formatFileSize(file.size);

            // Show PDF icon for PDFs
            previewImg.classList.add("d-none");
            previewIcon.classList.remove("d-none");
        }

        // Format file size
        function formatFileSize(bytes) {
            if (bytes < 1024) return bytes + " bytes";
            else if (bytes < 1048576) return (bytes / 1024).toFixed(2) + " KB";
            else return (bytes / 1048576).toFixed(2) + " MB";
        }

        // Upload button click handler
        if (uploadBtn) {
            uploadBtn.addEventListener("click", function () {
                processFileUpload();
            });
        }

        // File input change handler
        fileInput.addEventListener("change", function () {
            if (this.files.length > 0) {
                processFileUpload();
            }
        });

        // Remove file handler
        if (removeBtn) {
            removeBtn.addEventListener("click", function () {
                // Reset file input
                fileInput.value = "";
                // Clear any error message
                errorElement.textContent = "";
                // Show upload container again
                uploadContainer.classList.remove("d-none");
                // Hide preview
                previewContainer.classList.add("d-none");
            });
        }
    });
});
