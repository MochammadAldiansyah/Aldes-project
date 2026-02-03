<x-auth-layout title="Reset Password">
    <div class="mobile-logo">
        <x-application-logo />
    </div>

    <div class="form-header">
        <h2>Buat Password Baru 🔑</h2>
        <p>Silakan masukkan password baru Anda</p>
    </div>

    <!-- Info Box -->
    <div class="info-box">
        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
        <p>Pastikan password baru Anda mudah diingat namun tetap aman. Gunakan kombinasi huruf, angka, dan simbol.</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <div class="input-wrapper">
                <input 
                    id="email" 
                    class="form-input" 
                    type="email" 
                    name="email" 
                    value="{{ old('email', $request->email) }}" 
                    required 
                    autofocus 
                    autocomplete="username"
                    readonly
                    style="background: var(--bg-light); cursor: not-allowed;"
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
            <label for="password" class="form-label">Password Baru</label>
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
            <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
            <div class="input-wrapper">
                <input 
                    id="password_confirmation" 
                    class="form-input" 
                    type="password" 
                    name="password_confirmation" 
                    placeholder="Ulangi password baru"
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

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/>
            </svg>
            <span class="btn-text">Reset Password</span>
        </button>
    </form>

    <!-- Login Link -->
    <div class="auth-switch">
        <p>Ingat password Anda? <a href="{{ route('login') }}">Masuk</a></p>
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
</x-auth-layout>
