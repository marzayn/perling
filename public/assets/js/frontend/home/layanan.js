// Fetch Wilayah JSON
fetch("/assets/json/home/wilayah.json")
    .then((response) => response.json())
    .then((data) => populateFilters(data))
    .catch((error) => console.error("Gagal load wilayah.json:", error));

function populateFilters(data) {
    populateSelect("kabkota", data.kabkota);
    populateSelect("kecamatan", data.kecamatan);
    populateSelect("kelurahan", data.kelurahan);
}

function populateSelect(id, options) {
    const select = document.getElementById(id);
    if (!select) return;

    select.innerHTML = options
        .map(
            (opt) => `
    <option value="${opt.value}">${opt.label}</option>
  `
        )
        .join("");
}

// Fetch Layanan JSON
document.addEventListener("DOMContentLoaded", function () {
    fetch("/assets/json/home/layanan.json")
        .then((response) => response.json())
        .then((data) => {
            initializeLayanan(data);
            setupUIHandlers();
        })
        .catch((error) => console.error("Gagal load layanan.json:", error));
});

function initializeLayanan(data) {
    renderHeader(data.header);
    renderTabs(data.tabs);
    renderContents(data.contents);
    changeTab("pertek");
}

// Data Header
function renderHeader(header) {
    const headerContainer = document.querySelector("#layanan-header");
    if (!headerContainer) return;

    headerContainer.innerHTML = `
      <h1 class="text-2xl sm:text-4xl font-bold text-blue-900">${header.title}</h1>
      <p class="text-gray-700 mt-1 text-sm sm:text-base">${header.subtitle}</p>
    `;
}

// Data Tabs
function renderTabs(tabs) {
    const tabsContainer = document.querySelector("#layanan-tabs");
    if (!tabsContainer) return;

    tabsContainer.innerHTML = tabs
        .map(
            (tab) => `
      <button id="tab-${tab.id}"
              class="tab-btn bg-white border border-gray-300 px-3 sm:px-6 py-2 rounded text-sm sm:text-base"
              onclick="changeTab('${tab.id}')">
        ${tab.label}
      </button>
    `
        )
        .join("");
}

// Data Contents
function renderContents(contents) {
    const contentsContainer = document.querySelector("#layanan-contents");
    if (!contentsContainer) return;

    contentsContainer.innerHTML = Object.entries(contents)
        .map(([key, items]) => {
            if (key === "audit") {
                return `
          <div id="content-${key}" class="tab-content hidden bg-white rounded overflow-hidden shadow">
            ${renderAuditTable(items)}
          </div>
        `;
            } else {
                return `
          <div id="content-${key}" class="tab-content hidden bg-blue-900 rounded overflow-hidden">
            ${items.map((item) => renderStandardItem(item)).join("")}
          </div>
        `;
            }
        })
        .join("");
}

function renderStandardItem(item) {
    return `
      <div class="border-b border-blue-800 p-4 sm:p-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="flex gap-3 sm:gap-4 w-full">
          <div class="flex-shrink-0">
            <div class="bg-blue-500 p-2 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-8 sm:w-8 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
          </div>
          <div>
            <h2 class="text-white font-bold text-sm sm:text-base">${item.title}</h2>
            <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">${item.description}</p>
            <a href="${item.link}" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
          </div>
        </div>
        <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
          <div class="text-white text-xs sm:text-sm text-right">${item.periode}</div>
          <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
        </div>
      </div>
    `;
}

function renderAuditTable(items) {
    return `
      <div class="overflow-x-auto">
        <table class="w-full text-xs sm:text-base">
          <thead>
            <tr class="bg-blue-800 text-white">
              <th class="py-2 sm:py-3 px-2 sm:px-4 text-left w-12 sm:w-16">No</th>
              <th class="py-2 sm:py-3 px-2 sm:px-4 text-left">Nama PT</th>
              <th class="py-2 sm:py-3 px-2 sm:px-4 text-left">Judul</th>
              <th class="py-2 sm:py-3 px-2 sm:px-4 text-left hidden md:table-cell">Deskripsi</th>
              <th class="py-2 sm:py-3 px-2 sm:px-4 text-center w-20 sm:w-32">Aksi</th>
            </tr>
          </thead>
          <tbody>
            ${items
                .map(
                    (item) => `
              <tr class="border-b border-gray-200">
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">${item.no}</td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">${item.company}</td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">${item.title}</td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top hidden md:table-cell">
                  <div class="max-h-24 sm:max-h-32 overflow-y-auto pr-2">${item.description}</div>
                </td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">
                  <button class="bg-green-500 text-white px-2 sm:px-4 py-1.5 sm:py-2 rounded w-full text-xs sm:text-sm">Download</button>
                </td>
              </tr>
            `
                )
                .join("")}
          </tbody>
        </table>
      </div>
    `;
}

function setupUIHandlers() {
    // Toggle filter section
    const filterButton = document.getElementById("filter-button");
    if (filterButton) {
        filterButton.addEventListener("click", function () {
            const filterSection = document.getElementById("filter-section");
            if (filterSection) filterSection.classList.toggle("hidden");
        });
    }

    // Clear filter inputs
    const clearButton = document.getElementById("clear-filter");
    if (clearButton) {
        clearButton.addEventListener("click", function () {
            document.getElementById("kabkota").value = "";
            document.getElementById("kecamatan").value = "";
            document.getElementById("kelurahan").value = "";

            const searchInput = document.querySelector(
                'input[placeholder="Search"]'
            );
            if (searchInput) searchInput.value = "";
        });
    }
}

// Tab switching function
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
    if (selectedTab) {
        selectedTab.classList.remove("bg-white", "border", "border-gray-300");
        selectedTab.classList.add("bg-blue-900", "text-white");
    }

    const selectedContent = document.getElementById("content-" + tabName);
    if (selectedContent) {
        selectedContent.classList.remove("hidden");
    }
}
