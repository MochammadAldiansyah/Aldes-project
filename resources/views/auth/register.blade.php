@extends('layouts.auth')

@section('content')
    
<a href="/" class="back-home">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M19 12H5M12 19l-7-7 7-7"/>
    </svg>
    Kembali ke Beranda
</a>

<div class="mobile-logo">
    <x-application-logo />
</div>

<div class="form-header">
    <h2>Buat Akun Baru 🚀</h2>
    <p>Bergabunglah dengan ribuan pengguna lainnya</p>
</div>

<form method="POST" action="{{ route('register') }}" id="registerForm">
    @csrf
    
    <!-- Name -->
    <div class="form-group">
        <label for="name" class="form-label">Nama Lengkap</label>
        <div class="input-wrapper">
            <input 
            id="name" 
            class="form-input" 
            type="text" 
            name="name" 
            value="{{ old('name') }}" 
            placeholder="Masukkan nama lengkap"
            required 
            autofocus 
            autocomplete="name"
            >
            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        </div>
        @error('name')
        <div class="error-container">
            <div class="error-message">
                        <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        <span class="error-text">{{ $message }}</span>
                    </div>
                </div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
            <div class="input-wrapper">
                <input 
                id="email" 
                    class="form-input" 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    placeholder="contoh@email.com"
                    required 
                    autocomplete="username"
                    >
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
            </div>
            @error('email')
            <div class="error-container">
                <div class="error-message">
                        <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        <span class="error-text">{{ $message }}</span>
                    </div>
                </div>
                @enderror
        </div>
        
        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <div class="input-wrapper">
                <input 
                id="password" 
                    class="form-input" 
                    type="password" 
                    name="password" 
                    placeholder="Minimal 8 karakter"
                    required 
                    autocomplete="new-password"
                >
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
                <button type="button" class="password-toggle" aria-label="Toggle password visibility">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </button>
            </div>
            <!-- Password Strength Indicator -->
            <div class="password-strength" id="passwordStrength" style="display: none;">
                <div class="strength-bar">
                    <div class="strength-fill" id="strengthFill"></div>
                </div>
                <span class="strength-text" id="strengthText">Kekuatan password</span>
            </div>
            @error('password')
            <div class="error-container">
                    <div class="error-message">
                        <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        <span class="error-text">{{ $message }}</span>
                    </div>
                </div>
                @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <div class="input-wrapper">
                <input 
                    id="password_confirmation" 
                    class="form-input" 
                    type="password" 
                    name="password_confirmation" 
                    placeholder="Ulangi password"
                    required 
                    autocomplete="new-password"
                    >
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                <button type="button" class="password-toggle" aria-label="Toggle password visibility">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </button>
            </div>
            @error('password_confirmation')
                <div class="error-container">
                    <div class="error-message">
                        <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        <span class="error-text">{{ $message }}</span>
                    </div>
                </div>
            @enderror
        </div>

        <!-- Terms Agreement -->
        <div class="form-group">
            <div class="checkbox-wrapper">
                <input id="terms" type="checkbox" class="checkbox-input" name="terms" required>
                <label for="terms" class="checkbox-label">
                    Saya setuju dengan <a href="#" style="color: var(--primary);">Syarat & Ketentuan</a> serta <a href="#" style="color: var(--primary);">Kebijakan Privasi</a>
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="8.5" cy="7" r="4"/>
                <line x1="20" y1="8" x2="20" y2="14"/>
                <line x1="23" y1="11" x2="17" y2="11"/>
            </svg>
            <span class="btn-text">Daftar Sekarang</span>
        </button>
    </form>
    
    <!-- Divider -->
    <div class="divider">atau daftar dengan</div>

    <!-- Social Login Buttons -->
    <div class="social-buttons">
        <a href="#" class="btn-social">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Google
        </a>
        <a href="#" class="btn-social">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#1877F2">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            Facebook
        </a>
    </div>

    <!-- Login Link -->
    <div class="auth-switch">
        <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const strengthContainer = document.getElementById('passwordStrength');
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');
            
            if (passwordInput) {
                passwordInput.addEventListener('input', function() {
                    const password = this.value;
                    
                    if (password.length > 0) {
                        strengthContainer.style.display = 'block';
                        const strength = calculatePasswordStrength(password);
                        updateStrengthIndicator(strength);
                    } else {
                        strengthContainer.style.display = 'none';
                    }
                });
            }
            
            function calculatePasswordStrength(password) {
                let strength = 0;
                
                if (password.length >= 8) strength += 1;
                if (password.length >= 12) strength += 1;
                if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 1;
                if (/[0-9]/.test(password)) strength += 1;
                if (/[^a-zA-Z0-9]/.test(password)) strength += 1;
                
                return strength;
            }
            
            function updateStrengthIndicator(strength) {
                const levels = [
                    { width: '20%', color: '#F55767', text: 'Sangat Lemah' },
                    { width: '40%', color: '#FCAE61', text: 'Lemah' },
                    { width: '60%', color: '#FCAE61', text: 'Sedang' },
                    { width: '80%', color: '#40975F', text: 'Kuat' },
                    { width: '100%', color: '#40975F', text: 'Sangat Kuat' }
                ];
                
                const level = levels[Math.min(strength, 4)];
                strengthFill.style.width = level.width;
                strengthFill.style.background = level.color;
                strengthText.textContent = level.text;
                strengthText.style.color = level.color;
            }
        });
    </script>

@endsection