<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div class="sidebar-logo-area">
        <a href="{{ route('dashboard.index') }}" class="sidebar-logo">
            <img src="{{ asset('assets/images/asset/LOGO_PL.svg') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/logo_only.svg') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{ route('dashboard.index') }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-menu-group-title">Perizinan</li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:file-earmark-medical" class="menu-icon"></iconify-icon>
                  <span>Persetujuan Teknis</span>
                </a>
                 {{-- submenu --}}
                 <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('pertek.index_arahan') }}"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                        <span>Permohonan Arahan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pertek.index_emisi') }}"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                            <span>Emisi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pertek.index_airlimbah') }}"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                            <span>Air Limbah</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pertek.index_limbahb3') }}"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                            <span>Limbah B3</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                  <iconify-icon icon="bi:card-text" class="menu-icon"></iconify-icon>
                  <span>Rincian Teknis</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                  <span>Penugasan</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('penugasan.index') }}"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                        <span>Semua Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                            <span>Kegiatan Belum Ditugaskan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                        <span>Kegiatan Sudah Ditugaskan</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                  <span>Amdal</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                        <span>Semua Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                            <span>Sebelum Rapat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                        <span>Sesudah Rapat</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:file-earmark-break" class="menu-icon"></iconify-icon>
                  <span>UKL-UPL</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:file-earmark-break" class="menu-icon"></iconify-icon>
                        <span>Semua Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:file-earmark-break" class="menu-icon"></iconify-icon>
                            <span>Sebelum Rapat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:file-earmark-break" class="menu-icon"></iconify-icon>
                        <span>Sesudah Rapat</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:file-earmark-minus"" class="menu-icon"></iconify-icon>
                  <span>SPPL</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:file-earmark-minus"" class="menu-icon"></iconify-icon>
                        <span>Penapisan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:file-earmark-minus"" class="menu-icon"></iconify-icon>
                            <span>Terbit Otomatis</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:file-earmark-post" class="menu-icon"></iconify-icon>
                  <span>ADDENDUM</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:file-earmark-post" class="menu-icon"></iconify-icon>
                        <span>Semua Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:file-earmark-post" class="menu-icon"></iconify-icon>
                            <span>Sebelum Rapat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:file-earmark-post" class="menu-icon"></iconify-icon>
                        <span>Sesudah Rapat</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:activity" class="menu-icon"></iconify-icon>
                  <span>Kegiatan</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:person-video" class="menu-icon"></iconify-icon>
                        <span>Daftar Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:person-video" class="menu-icon"></iconify-icon>
                            <span>Perubahan Dengan Dokumen</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:pencil-square" class="menu-icon"></iconify-icon>
                  <span>Perubahan Persetujuan Lingkungan</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:pencil-square" class="menu-icon"></iconify-icon>
                        <span>File Browser</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:pencil-square" class="menu-icon"></iconify-icon>
                            <span>Data Pemrakarsa</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="sidebar-menu-group-title">Data Master</li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:folder" class="menu-icon"></iconify-icon>
                  <span>Basis Data</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:folder" class="menu-icon"></iconify-icon>
                        <span>File Browser</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:folder" class="menu-icon"></iconify-icon>
                            <span>Data Pemrakarsa</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:folder" class="menu-icon"></iconify-icon>
                            <span>Data Penyusun</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:folder" class="menu-icon"></iconify-icon>
                            <span>Data PJM</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:folder" class="menu-icon"></iconify-icon>
                            <span>Data Konsultan</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                        <iconify-icon icon="bi:pencil-square" class="menu-icon"></iconify-icon>
                        <span>Data TUK</span>
                        </a>
                    </li>
                </ul>
            </li>




        </ul>


    </div>
</aside>
