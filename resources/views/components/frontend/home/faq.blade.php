@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/frontend/home/faq.css') }}">
@endpush

@push('script')
<script src="{{ asset('assets/js/frontend/home/faq.js') }}"></script>
@endpush

<section class="bg-gradient-to-b from-gray-50 to-gray-100 font-sans py-6">
  <div class="container mx-auto max-w-7xl px-4">
    <div class="flex flex-col md:flex-row gap-8">
      <div>
        <h2 class="text-2xl font-bold custom-blue mb-4">Frequently Asked Questions</h2>

        @foreach($faqs as $faq)
        <div class="faq-item bg-white rounded-xl shadow-sm hover:shadow-lg mb-5 overflow-hidden transition-all duration-300">
          <div class="faq-header flex justify-between items-center p-5 cursor-pointer">
            <div class="flex items-center gap-3">
              <div class="faq-icon bg-blue-50 text-custom-blue p-2 rounded-full">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                  <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#003296" stroke-width="2"/>
                  <path d="M12 17V17.01M12 14C12.5523 14 13 13.5523 13 13V9.5C13 8.94772 12.5523 8.5 12 8.5C11.4477 8.5 11 8.94772 11 9.5V13C11 13.5523 11.4477 14 12 14Z" stroke="#003296" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </div>
              <h3 class="text-lg font-semibold custom-blue">{{ $faq['question'] }}</h3>
            </div>
            <div class="faq-toggle w-8 h-8 flex items-center justify-center text-custom-blue rounded-full transition-all duration-300">
              <svg width="20" height="20" viewBox="0 0 24 24" class="transform transition-transform duration-300">
                <path d="M12 5V19M5 12H19" stroke="#003296" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="faq-content overflow-hidden max-h-0 transition-all duration-500 px-5">
            <div class="py-5 border-t border-gray-100">
              <p class="text-gray-600">{{ $faq['answer'] }}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <div>
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-custom-blue">
          <h2 class="text-2xl font-bold custom-blue mb-6">Track Your Document</h2>
          <div class="mb-6">
            <label for="documentNumber" class="block text-sm font-medium text-gray-700 mb-2">Nomor Registrasi Kegiatan</label>
            <div class="flex">
              <input type="text" id="documentNumber" class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-200 focus:border-custom-blue outline-none" placeholder="Masukkan Nomor Registrasi Kegiatan...">
              <button class="bg-green-500 text-white px-5 py-2 rounded-r-lg hover:bg-blue-800 transition">
                Track
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
