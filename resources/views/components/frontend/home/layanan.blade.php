@push('script')
<script src="{{ asset('assets/js/frontend/home/layanan.js') }}"></script>
@endpush

<section class="bg-gray-100">
    <div class="container mx-auto max-w-7xl px-4 py-8 sm:py-15">
      <!-- Header -->
      <div class="mb-4">
        <h1 class="text-2xl sm:text-4xl font-bold text-blue-900">Daftar Pengumuman & Informasi</h1>
        <p class="text-gray-700 mt-1 text-sm sm:text-base">Daftar Pengumuman dan Informasi terkait kegiatan yang mengajukan izin lingkungan</p>
      </div>

      <!-- Filter Buttons and Search -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 mb-6">
        <div class="flex flex-wrap gap-2 w-full sm:w-auto">
            <button id="tab-pertek" class="tab-btn bg-white border border-gray-300 px-3 sm:px-6 py-2 rounded text-sm sm:text-base" onclick="changeTab('pertek')">PERTEK</button>
            <button id="tab-rintek" class="tab-btn bg-white border border-gray-300 px-3 sm:px-6 py-2 rounded text-sm sm:text-base" onclick="changeTab('rintek')">RINTEK</button>
            <button id="tab-amdal" class="tab-btn bg-white border border-gray-300 px-3 sm:px-6 py-2 rounded text-sm sm:text-base" onclick="changeTab('amdal')">AMDAL</button>
            <button id="tab-addendum" class="tab-btn bg-white border border-gray-300 px-3 sm:px-6 py-2 rounded text-sm sm:text-base" onclick="changeTab('addendum')">Addendum</button>
            <button id="tab-ukl-upl" class="tab-btn bg-white border border-gray-300 px-3 sm:px-6 py-2 rounded text-sm sm:text-base" onclick="changeTab('ukl-upl')">UKL - UPL</button>
            <button id="tab-audit" class="tab-btn bg-blue-800 text-white px-3 sm:px-6 py-2 rounded text-sm sm:text-base" onclick="changeTab('audit')">AUDIT</button>
        </div>
        <div class="flex gap-2 w-full sm:w-auto mt-3 sm:mt-0">
            <div class="relative flex-grow sm:flex-grow-0">
                <input type="text" placeholder="Search" class="pl-10 pr-3 py-2 border border-gray-300 rounded w-full sm:w-64">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-2.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <div class="relative">
                <button id="filter-button" class="bg-yellow-500 text-white px-4 sm:px-6 py-2 rounded flex items-center text-sm sm:text-base whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 sm:h-5 w-4 sm:w-5 mr-1 sm:mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filters
                </button>
            </div>
        </div>
    </div>

    <!-- Filter dropdown section - positioned below the filters button -->
    <div id="filter-section" class="hidden w-full mb-6 bg-white border border-gray-200 rounded-md p-4 shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="kabkota" class="block text-sm font-medium text-gray-700 mb-1">Kabupaten/Kota</label>
                <select id="kabkota" name="kabkota" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Kabupaten/Kota</option>
                    <option value="kepseribu">ADM. KEP. SERIBU</option>
                    <option value="jakpus">KOTA ADM. JAKARTA PUSAT</option>
                    <option value="jakut">KOTA ADM. JAKARTA UTARA</option>
                    <option value="jakbar">KOTA ADM. JAKARTA BARAT</option>
                    <option value="jaksel">KOTA ADM. JAKARTA SELATAN</option>
                    <option value="jaktim">KOTA ADM. JAKARTA TIMUR</option>
                </select>
            </div>
            <div>
                <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
                <select id="kecamatan" name="kecamatan" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Kecamatan</option>
                    <option value="kepseribuutara">KEPULAUAN SERIBU UTARA</option>
                    <option value="kepseribuselatan">KEPULAUAN SERIBU SELATAN</option>
                </select>
            </div>
            <div>
                <label for="kelurahan" class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
                <select id="kelurahan" name="kelurahan" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Kelurahan</option>
                    <option value="kepseribuutara">PULAU PANGGANG</option>
                    <option value="kepseribuselatan">PULAU KELAPA</option>
                    <option value="kepseribuselatan">PULAU HARAPAN</option>
                </select>
            </div>
        </div>
        <div class="mt-4 flex justify-end gap-2">
            <button id="clear-filter" class="bg-gray-600 text-white px-4 py-2 rounded text-sm">Clear Filter</button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm">Terapkan Filter</button>
        </div>
        </div>

      <!-- Pertek Content -->
      <div id="content-pertek" class="tab-content hidden bg-blue-900 rounded overflow-hidden">
        <!-- Announcement 1 -->
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
              <h2 class="text-white font-bold text-sm sm:text-base">Kegiatan Penggalian Kuarsa/Pasir Kuarsa, LUKITO HARTONO LAWY</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Penurunan Kualitas Udara, Peningkatan Kebisingan, Peningkatan Air Larian, Peningkatan Timbulan Sampah, Terjadinya Gangguan Lalu Lintas, Terbukanya Kes</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">27 Maret - 10 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>

        <!-- Announcement 2 -->
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
              <h2 class="text-white font-bold text-sm sm:text-base">Pembangunan Waterfront Malalayang, TARCISIUS ASWIN JULIZAR, W</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Pra Konstruksi 1. Persepsi Masyarakat Tahap Konstruksi 1. Peningkatan Kesempatan Kerja dan Berusaha 2. Peningkatan Sedimentasi 3. Perubahan Garis</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">26 Maret - 9 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>
      </div>

       <!-- Rintek Content -->
       <div id="content-rintek" class="tab-content hidden bg-blue-900 rounded overflow-hidden">
        <!-- Announcement 1 -->
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
              <h2 class="text-white font-bold text-sm sm:text-base">Test Penggalian Kuarsa/Pasir Kuarsa, LUKITO HARTONO LAWY</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Penurunan Kualitas Udara, Peningkatan Kebisingan, Peningkatan Air Larian, Peningkatan Timbulan Sampah, Terjadinya Gangguan Lalu Lintas, Terbukanya Kes</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">27 Maret - 10 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>

        <!-- Announcement 2 -->
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
              <h2 class="text-white font-bold text-sm sm:text-base">Pembangunan Waterfront Malalayang, TARCISIUS ASWIN JULIZAR, W</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Pra Konstruksi 1. Persepsi Masyarakat Tahap Konstruksi 1. Peningkatan Kesempatan Kerja dan Berusaha 2. Peningkatan Sedimentasi 3. Perubahan Garis</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">26 Maret - 9 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>
      </div>

      <!-- AMDAL Content -->
      <div id="content-amdal" class="tab-content hidden bg-blue-900 rounded overflow-hidden">
        <!-- Announcement 1 -->
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
              <h2 class="text-white font-bold text-sm sm:text-base">Kegiatan Penggalian Kuarsa/Pasir Kuarsa, LUKITO HARTONO LAWY</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Penurunan Kualitas Udara, Peningkatan Kebisingan, Peningkatan Air Larian, Peningkatan Timbulan Sampah, Terjadinya Gangguan Lalu Lintas, Terbukanya Kes</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">27 Maret - 10 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>

        <!-- Announcement 2 -->
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
              <h2 class="text-white font-bold text-sm sm:text-base">Pembangunan Waterfront Malalayang, TARCISIUS ASWIN JULIZAR, W</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Pra Konstruksi 1. Persepsi Masyarakat Tahap Konstruksi 1. Peningkatan Kesempatan Kerja dan Berusaha 2. Peningkatan Sedimentasi 3. Perubahan Garis</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">26 Maret - 9 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>
      </div>

      <!-- Addendum Content -->
      <div id="content-addendum" class="tab-content hidden bg-blue-900 rounded overflow-hidden">
        <!-- Similar content as AMDAL but for Addendum -->
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
              <h2 class="text-white font-bold text-sm sm:text-base">Pembangunan Waterfront Malalayang, TARCISIUS ASWIN JULIZAR, W</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Pra Konstruksi 1. Persepsi Masyarakat Tahap Konstruksi 1. Peningkatan Kesempatan Kerja dan Berusaha 2. Peningkatan Sedimentasi 3. Perubahan Garis</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">26 Maret - 9 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>
      </div>

      <!-- UKL-UPL Content -->
      <div id="content-ukl-upl" class="tab-content hidden bg-blue-900 rounded overflow-hidden">
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
              <h2 class="text-white font-bold text-sm sm:text-base">Pembangunan Waterfront Malalayang, TARCISIUS ASWIN JULIZAR, W</h2>
              <p class="text-blue-200 mt-1 sm:mt-2 text-xs sm:text-sm">Dampak Potensials: Pra Konstruksi 1. Persepsi Masyarakat Tahap Konstruksi 1. Peningkatan Kesempatan Kerja dan Berusaha 2. Peningkatan Sedimentasi 3. Perubahan Garis</p>
              <a href="#" class="text-green-300 mt-1 block text-xs sm:text-sm">Baca selengkapnya ...</a>
            </div>
          </div>
          <div class="flex flex-row sm:flex-col items-center sm:items-end justify-between sm:justify-end gap-2 w-full sm:w-auto mt-2 sm:mt-0">
            <div class="text-white text-xs sm:text-sm text-right">26 Maret - 9 April 2025</div>
            <button class="bg-green-500 text-white px-3 sm:px-6 py-1.5 sm:py-2 rounded text-xs sm:text-sm whitespace-nowrap">Berikan Tanggapan</button>
          </div>
        </div>
      </div>

      <!-- AUDIT Content - Table View -->
      <div id="content-audit" class="tab-content bg-white rounded overflow-hidden shadow">
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
              <tr class="border-b border-gray-200">
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">1</td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">PT PETROKIMIA GRESIK</td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">PENGUMUMAN AUDIT LINGKUNGAN HIDUP WAJIB BERKALA INDUSTRI PETROKIMIA</td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top hidden md:table-cell">
                  <div class="max-h-24 sm:max-h-32 overflow-y-auto pr-2">
                    PT Petrokimia Gresik merupakan Kegiatan pada sektor Industri Petrokimia : Industri Pupuk dan Bahan Kimia (Amonia, Pupuk, Asam Sulfat, Asam Fosfat, dan Asam Klorida) yang telah dikenakan Audit Lingkungan Hidup Wajib Berkala untuk kegiatan berisiko tinggi terhadap lingkungan berdasarkan Lampiran I Peraturan
                  </div>
                </td>
                <td class="py-3 sm:py-4 px-2 sm:px-4 align-top">
                  <button class="bg-green-500 text-white px-2 sm:px-4 py-1.5 sm:py-2 rounded w-full text-xs sm:text-sm">Download</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
