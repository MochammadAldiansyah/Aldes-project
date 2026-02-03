<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Authentication' }} - {{ config('app.name', 'Aldes') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">

    <!-- Auth Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body class="auth-page">
    <div class="auth-container">
        <!-- Left Decorative Panel -->
        <div class="auth-panel-left">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
            
            <div class="content">
                <x-application-logo class="brand-logo" />
                <h1>Selamat Datang!</h1>
                <p>Kelola produktivitas Anda dengan aplikasi to-do list terbaik untuk gaya hidup modern.</p>
                
                <div class="features">
                    <div class="feature-item">
                        <div class="feature-icon">⚡</div>
                        <span class="feature-text">Performa super cepat</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🔒</div>
                        <span class="feature-text">Keamanan data terjamin</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">☁️</div>
                        <span class="feature-text">Sinkronisasi cloud otomatis</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="auth-panel-right">
            <div class="auth-form-container">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        // Password toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButtons = document.querySelectorAll('.password-toggle');
            
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.closest('.input-wrapper').querySelector('input');
                    const icon = this.querySelector('svg');
                    
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>';
                    } else {
                        input.type = 'password';
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
                    }
                });
            });
        });
    </script>
</body>
</html>
