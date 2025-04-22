<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head/>

<link rel="stylesheet" href="{{ asset('assets/css/login/login.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


<body>
    <div class="container">
        <div class="login-card">
            <div class="login-image">
                <img src="{{ asset('assets/images/auth/monas.svg')}}" alt="Monumen Nasional" style="max-width: 100%; max-height: 500px;">
            </div>

            <!-- Right Section with Login Form -->
            <div class="login-form">
                <img src="{{ asset('assets/images/auth/logo-login.svg') }}" alt="Balai Sertifikasi Elektronik" class="logo">

                <h1 class="text-login">Login</h1>
                <p class="subtext">Silakan masuk menggunakan akun DLH</p>
                <form action="#" method="POST" style="width: 100%;">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="nik" name="nik" placeholder="NIK (No. KTP) / Email" required>
                    </div>

                    <div class="form-group">
                        <div class="password-container">
                            <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
                            <span class="password-toggle">
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="">
                        <div class="d-flex justify-content-between gap-2">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input border border-neutral-300" type="checkbox" value="" id="remember">
                                <label class="form-check-label" for="remember">Ingat saya</label>
                            </div>
                            {{-- <a href="javascript:void(0)" class="text-primary-600 fw-medium">Forgot Password?</a> --}}
                        </div>
                    </div>
                    <a class="login-button" href="{{ route('dashboard.index') }}">
                        Login
                    </a>
                    {{-- <button type="submit" class="login-button">Log in</button> --}}
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.password-toggle').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.className = 'bi bi-eye-slash';
            } else {
                passwordInput.type = 'password';
                icon.className = 'bi bi-eye';
            }
        });
    </script>
</body>

<x-script />

</body>

</html>
