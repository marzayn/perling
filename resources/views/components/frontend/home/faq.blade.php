<section class="bg-gradient-to-b from-gray-50 to-gray-100 font-sans py-6">
    <div class="container mx-auto max-w-7xl px-4">

      <div class="flex flex-col md:flex-row gap-8">
        <!-- Left Column - FAQ -->
        <div>
          <h2 class="text-2xl font-bold custom-blue mb-4">Frequently Asked Questions</h2>


          <div class="faq-item bg-white rounded-xl shadow-sm hover:shadow-lg mb-5 overflow-hidden transition-all duration-300">
            <div class="faq-header flex justify-between items-center p-5 cursor-pointer">
              <div class="flex items-center gap-3">
                <div class="faq-icon bg-blue-50 text-custom-blue p-2 rounded-full">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#003296" stroke-width="2"/>
                    <path d="M12 17V17.01M12 14C12.5523 14 13 13.5523 13 13V9.5C13 8.94772 12.5523 8.5 12 8.5C11.4477 8.5 11 8.94772 11 9.5V13C11 13.5523 11.4477 14 12 14Z" stroke="#003296" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </div>
                <h3 class="text-lg font-semibold custom-blue">Bagaimana mekanisme penapisan dengan hasil jenis dokumen SPPL?</h3>
              </div>
              <div class="faq-toggle w-8 h-8 flex items-center justify-center text-custom-blue rounded-full transition-all duration-300">
                <svg width="20" height="20" viewBox="0 0 24 24" class="transform transition-transform duration-300">
                  <path d="M12 5V19M5 12H19" stroke="#003296" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
            <div class="faq-content overflow-hidden max-h-0 transition-all duration-500 px-5">
              <div class="py-5 border-t border-gray-100">
                <p class="text-gray-600">Proses penapisan dilakukan untuk menentukan jenis dokumen yang sesuai berdasarkan kegiatan yang diajukan. Jika hasil penapisan menunjukkan bahwa jenis dokumen yang diperlukan adalah SPPL (Surat Pernyataan Pengelolaan Lingkungan), pengguna dapat mengikuti panduan penggunaan (manual guide) SPPL yang t</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-white rounded-xl shadow-sm hover:shadow-lg mb-5 overflow-hidden transition-all duration-300">
            <div class="faq-header flex justify-between items-center p-5 cursor-pointer">
              <div class="flex items-center gap-3">
                <div class="faq-icon bg-blue-50 text-custom-blue p-2 rounded-full">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#003296" stroke-width="2"/>
                    <path d="M12 17V17.01M12 14C12.5523 14 13 13.5523 13 13V9.5C13 8.94772 12.5523 8.5 12 8.5C11.4477 8.5 11 8.94772 11 9.5V13C11 13.5523 11.4477 14 12 14Z" stroke="#003296" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </div>
                <h3 class="text-lg font-semibold custom-blue">Bagaimana cara Validator Administrasi melakukan uji administrasi?</h3>
              </div>
              <div class="faq-toggle w-8 h-8 flex items-center justify-center text-custom-blue rounded-full transition-all duration-300">
                <svg width="20" height="20" viewBox="0 0 24 24" class="transform transition-transform duration-300">
                  <path d="M12 5V19M5 12H19" stroke="#003296" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
            <div class="faq-content overflow-hidden max-h-0 transition-all duration-500 px-5">
              <div class="py-5 border-t border-gray-100">
                <p class="text-gray-600">Validator Administrasi memeriksa kesesuaian berkas administrasi dengan cara mengklik menu AMDAL atau UKL-UPL, memilih menu sebelum rapat, dan mengakses tab Uji Admin. Validator menentukan kelengkapan administrasi dengan memberikan keterangan di kolom yang sesuai</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column - Tracking Document -->
        <div>
          <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-custom-blue">
            <h2 class="text-2xl font-bold custom-blue mb-6">Track Your Document</h2>

            <div class="mb-6">
              <label for="documentNumber" class="block text-sm font-medium text-gray-700 mb-2">Nomor Registrasi Kegiatan</label>
              <div class="flex">
                <input type="text" id="documentNumber" class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-200 focus:border-custom-blue outline-none" placeholder="Masukkan Nomor Registrasi Kegiatan...">
                <button class="bg-custom-blue text-white px-5 py-2 rounded-r-lg hover:bg-blue-800 transition">
                  Track
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.querySelectorAll('.faq-header').forEach(header => {
        header.addEventListener('click', () => {
          const parent = header.parentElement;
          const content = parent.querySelector('.faq-content');
          const toggle = parent.querySelector('.faq-toggle svg');

          // Close all other FAQs
          document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== parent && item.classList.contains('active')) {
              item.classList.remove('active');
              item.querySelector('.faq-content').style.maxHeight = '0';
              item.querySelector('.faq-toggle svg').classList.remove('rotate-45');
            }
          });

          // Toggle current FAQ
          parent.classList.toggle('active');

          if (parent.classList.contains('active')) {
            content.style.maxHeight = content.scrollHeight + "px";
            toggle.classList.add('rotate-45');
          } else {
            content.style.maxHeight = '0';
            toggle.classList.remove('rotate-45');
          }
        });
      });
    </script>
</section>

<style>
  .custom-blue {
    color: #003296;
  }
  .custom-blue-bg, .bg-custom-blue {
    background-color: #003296;
  }
  .border-custom-blue {
    border-color: #003296;
  }
  .faq-item {
    border-left: 4px solid transparent;
    transition: all 0.3s ease;
  }
  .faq-item:hover, .faq-item.active {
    border-left: 4px solid #003296;
  }
  .faq-item.active {
    box-shadow: 0 10px 15px -3px rgba(0, 50, 150, 0.1);
  }
  @media (min-width: 768px) {
    .faq-icon {
      transform: scale(0.9);
      transition: transform 0.3s ease;
    }
    .faq-item:hover .faq-icon {
      transform: scale(1.1);
    }
  }
</style>
