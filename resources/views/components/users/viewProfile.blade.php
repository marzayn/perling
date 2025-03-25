@extends('layout.layout')
@php
    $title='View Profile';
    $subTitle = 'View Profile';
    $script ='<script>
                    // ======================== Upload Image Start =====================
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $("#imagePreview").css("background-image", "url(" + e.target.result + ")");
                                $("#imagePreview").hide();
                                $("#imagePreview").fadeIn(650);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    $("#imageUpload").change(function() {
                        readURL(this);
                    });
                    // ======================== Upload Image End =====================

                    // ================== Password Show Hide Js Start ==========
                    function initializePasswordToggle(toggleSelector) {
                        $(toggleSelector).on("click", function() {
                            $(this).toggleClass("ri-eye-off-line");
                            var input = $($(this).attr("data-toggle"));
                            if (input.attr("type") === "password") {
                                input.attr("type", "text");
                            } else {
                                input.attr("type", "password");
                            }
                        });
                    }
                    // Call the function
                    initializePasswordToggle(".toggle-password");
                    // ========================= Password Show Hide Js End ===========================
            </script>';
@endphp

@section('content')
            <!-- Alert box at the top -->
            <div class="alert alert-warning radius-8 mb-24">
                <div class="d-flex align-items-start">
                    <i class="ri-information-line me-2 mt-1"></i>
                    <div>
                        <ul class="mb-0">
                            <li class="mb-8">Sinkronisasi akun hanya dapat dilakukan jika NIB anda sudah terdaftar di OSS-RBA, jika NIB yang anda daftarkan di Akun Arndalnet terdapat kesalahan, silahkan hubungi helpdesk Arndalnet (+62 851-8666-0568).</li>
                            <li class="mb-8">Jika Anda ingin mengubah email untuk kebutuhan mengganti email akun anda yang sekarang menjadi email baru, silahkan anda mengubahnya dibawah lalu klik ubah.</li>
                            <li>Jika Anda adalah Pelaku Usaha mandiri dengan kondisi belum melakukan integrasi akun dengan OSS-RBA. Silahkan anda klik tombol "Sinkronisasi ke Akun Pelaku Usaha OSS-RBA" untuk menyamakan email saat ini dengan email yang terdaftar di OSS-RBA (pastikan NIB sudah sama dengan yang terdaftar di OSS-RBA).</li>
                        </ul>
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="user-grid-card position-relative border radius-16 overflow-hidden bg-base h-100">
                        <img src="{{ asset('assets/images/user-grid/user-grid-bg1.png') }}" alt="" class="w-100 object-fit-cover">
                        <div class="pb-24 ms-16 mb-24 me-16  mt--100">
                            <div class="text-center border border-top-0 border-start-0 border-end-0">
                                <img src="{{ asset('assets/images/user-grid/user-grid-img14.png') }}" alt="" class="border br-white border-width-2-px w-200-px h-200-px rounded-circle object-fit-cover">
                                <h6 class="mb-0 mt-16">Helmy Zulhidayat</h6>
                                <span class="text-secondary-light mb-16">amdal.jakarta@gmail.com</span>
                            </div>
                            <div class="mt-24">
                                <h6 class="text-xl mb-16">Personal Info</h6>
                                <ul>
                                    <li class="d-flex align-items-center gap-1 mb-12">
                                        <span class="w-30 text-md fw-semibold text-primary-light">Full Name</span>
                                        <span class="w-70 text-secondary-light fw-medium">: Helmy Zulhidayat</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-1 mb-12">
                                        <span class="w-30 text-md fw-semibold text-primary-light"> Email</span>
                                        <span class="w-70 text-secondary-light fw-medium">: amdal.jakarta@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-body p-24">
                            <h5 class="text-primary-light border-bottom pb-2 mb-4">Akun</h5>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-edit-profile" role="tabpanel" aria-labelledby="pills-edit-profile-tab" tabindex="0">
                                    <h6 class="text-md text-primary-light mb-16">Profile Image</h6>
                                    <!-- Upload Image Start -->
                                    <div class="mb-24 mt-16">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit position-absolute bottom-0 end-0 me-24 mt-16 z-1 cursor-pointer">
                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" hidden>
                                                <label for="imageUpload" class="w-32-px h-32-px d-flex justify-content-center align-items-center bg-primary-50 text-primary-600 border border-primary-600 bg-hover-primary-100 text-lg rounded-circle">
                                                    <iconify-icon icon="solar:camera-outline" class="icon"></iconify-icon>
                                                </label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Upload Image End -->
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Full Name <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="name" value="Helmy Zulhidayat" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                                    <input type="email" class="form-control radius-8" id="email" value="amdal.jakarta@gmail.com" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <button type="button" class="btn btn-success px-4 py-2 radius-8">
                                                Ubah
                                            </button>
                                            <button type="button" class="btn btn-warning px-4 py-2 radius-8">
                                                Ubah Password
                                            </button>
                                            <button type="button" class="btn btn-warning px-4 py-2 radius-8">
                                                Ubah Email
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
