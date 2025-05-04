@push('script')
<script src="{{ asset('assets/js/frontend/home/layanan.js') }}"></script>
@endpush

<section class="bg-gray-100">
    <div class="container mx-auto max-w-7xl px-4 py-8 sm:py-15">
      <!-- Header -->
      <div id="layanan-header" class="mb-4"></div>

    {{-- Tabs (PERTEK, RINTEK, AMDAL, dll) --}}
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 mb-6">
        <div id="layanan-tabs" class="flex flex-wrap gap-2 w-full sm:w-auto"></div>

        {{-- Search + Filter Section --}}
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

    {{-- Filter Section --}}
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
              <option value="pulau_panggung">PULAU PANGGANG</option>
              <option value="pulau_kelapa">PULAU KELAPA</option>
              <option value="pulau_harapan">PULAU HARAPAN</option>
            </select>
          </div>
        </div>

        <div class="mt-4 flex justify-end gap-2">
          <button id="clear-filter" class="bg-gray-600 text-white px-4 py-2 rounded text-sm">Clear Filter</button>
          <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm">Terapkan Filter</button>
        </div>
      </div>

      {{-- Konten Layanan --}}
      <div id="layanan-contents"></div>

    </div>
  </section>
