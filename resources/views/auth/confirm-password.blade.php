<x-auth-layout title="Konfirmasi Password">
    <div class="mobile-logo">
        <x-application-logo />
    </div>

    <div class="form-header">
        <h2>Konfirmasi Password</h2>
        <p>Area ini memerlukan verifikasi</p>
    </div>

    <div class="info-box">
        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
        <p>Silakan konfirmasi password Anda sebelum melanjutkan.</p>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <div class="input-wrapper">
                <input id="password" class="form-input" type="password" name="password" placeholder="Masukkan password" required autocomplete="current-password">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
                <button type="button" class="password-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </button>
            </div>
            @error('password')
                <div class="error-container">
                    <div class="error-message">
                        <span class="error-text">{{ $message }}</span>
                    </div>
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Konfirmasi</button>
    </form>
</x-auth-layout>
