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

            <li>
                <a href="{{ route('jadwal.index') }}">
                  <iconify-icon icon="bi:calendar-date" class="menu-icon"></iconify-icon>
                  <span>Penjadwalan</span>
                </a>
            </li>

            <li class="sidebar-menu-group-title">Persetujuan Teknis</li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:file-earmark-medical" class="menu-icon"></iconify-icon>
                  <span>PERTEK</span>
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
                        <a href="{{ route('pertek.index_slo') }}"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                        <span>Permohonan SLO</span>
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

            <li class="sidebar-menu-group-title">Rincian Teknis</li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:card-text" class="menu-icon"></iconify-icon>
                  <span>RINTEK</span>
                </a>
                 {{-- submenu --}}
                 <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('rintek.index_arahan') }}"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:list-task" class="menu-icon"></iconify-icon>
                        <span>Permohonan Arahan</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-menu-group-title">Persetujuan Lingkungan</li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:card-text" class="menu-icon"></iconify-icon>
                  <span>PERLING</span>
                </a>
                 {{-- submenu --}}
                 <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('persetujuan.kerangka.index') }}"><i class="text-primary-600 w-auto"></i>
                           <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                           <span>Permohonan Kerangka Acuan</span>
                         </a>
                   </li>
                   <li>
                       <a href="{{ route ('persetujuan.amdal.index') }}"><i class="text-primary-600 w-auto"></i>
                         <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                         <span>Amdal</span>
                       </a>
                   </li>
                   <li>
                   <a href="{{ route('persetujuan.rkl.index') }}"><i class="text-primary-600 w-auto"></i>
                           <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                           <span>Andal RKL-RPL</span>
                         </a>
                   </li>
                   <li>
                         <a href="{{ route('persetujuan.ukl.index') }}"><i class="text-primary-600 w-auto"></i>
                           <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                           <span>UKL-UPL</span>
                         </a>
                   </li>
                   <li>
                         <a href="{{ route('persetujuan.addendum.index') }}"><i class="text-primary-600 w-auto"></i>
                           <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                           <span>ADDENDUM</span>
                         </a>
                       </li>
                       <li>
                         <a href="{{ route('persetujuan.delh.index') }}"><i class="text-primary-600 w-auto"></i>
                           <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                           <span>DELH</span>
                         </a>
                       </li>
                       <li>
                         <a href="{{ route('persetujuan.dplh.index') }}"><i class="text-primary-600 w-auto"></i>
                           <iconify-icon icon="bi:journal-text" class="menu-icon"></iconify-icon>
                           <span>DPLH</span>
                         </a>
                       </li>
                </ul>
            </li>


            <li class="sidebar-menu-group-title">Pengaturan</li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                  <iconify-icon icon="bi:person-fill" class="menu-icon"></iconify-icon>
                  <span>User</span>
                </a>
                {{-- submenu --}}
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                        <iconify-icon icon="bi:person-fill" class="menu-icon"></iconify-icon>
                        <span>Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="text-primary-600 w-auto"></i>
                            <iconify-icon icon="bi:person-gear" class="menu-icon"></iconify-icon>
                            <span>Roles & Akses</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="sidebar-menu-group-title">Konten</li>
            <li>
                <a href="{{ route('news.index_newsvideo') }}">
                  <iconify-icon icon="bi:pencil-square" class="menu-icon"></iconify-icon>
                  <span>News & Video</span>
                </a>
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
                </ul>
            </li>
        </ul>
    </div>
</aside>
