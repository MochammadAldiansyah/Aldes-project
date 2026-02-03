@extends('layouts.auth')

@section('content')
    <a href="{{ route('login') }}" class="back-home">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H5M12 19l-7-7 7-7" />
        </svg>
        Kembali ke Login
    </a>

    <div class="mobile-logo">
        <x-application-logo />
    </div>

    <div class="form-header">
        <h2>Lupa Password? 🔐</h2>
        <p>Jangan khawatir, kami akan membantu Anda</p>
    </div>

    <!-- Info Box -->
    <div class="info-box">
        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <line x1="12" y1="16" x2="12" y2="12" />
            <line x1="12" y1="8" x2="12.01" y2="8" />
        </svg>
        <p>Masukkan alamat email yang terdaftar dan kami akan mengirimkan link untuk mereset password Anda.</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="session-status">
            <svg class="status-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                <polyline points="22 4 12 14.01 9 11.01" />
            </svg>
            <p>{{ session('status') }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" id="forgotPasswordForm">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <div class="input-wrapper">
                <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}"
                    placeholder="contoh@email.com" required autofocus>
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline points="22,6 12,13 2,6" />
                </svg>
            </div>
            @error('email')
                <div class="error-container">
                    <div class="error-message">
                        <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="12" y1="8" x2="12" y2="12" />
                            <line x1="12" y1="16" x2="12.01" y2="16" />
                        </svg>
                        <span class="error-text">{{ $message }}</span>
                    </div>
                </div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary" id="submitBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="22" y1="2" x2="11" y2="13" />
                <polygon points="22 2 15 22 11 13 2 9 22 2" />
            </svg>
            <span class="btn-text">Kirim Link Reset Password</span>
        </button>
    </form>

    <!-- Additional Help -->
    <div style="margin-top: 2rem; padding: 1.5rem; background: var(--bg-light); border-radius: 12px;">
        <h4
            style="font-size: 0.95rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                <line x1="12" y1="17" x2="12.01" y2="17" />
            </svg>
            Butuh bantuan?
        </h4>
        <ul style="list-style: none; padding: 0; margin: 0;">
            <li
                style="display: flex; align-items: flex-start; gap: 0.5rem; margin-bottom: 0.5rem; font-size: 0.85rem; color: var(--text-secondary);">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                    fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;">
                    <polyline points="9 11 12 14 22 4" />
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                </svg>
                Periksa folder spam atau junk email Anda
            </li>
            <li
                style="display: flex; align-items: flex-start; gap: 0.5rem; margin-bottom: 0.5rem; font-size: 0.85rem; color: var(--text-secondary);">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                    fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;">
                    <polyline points="9 11 12 14 22 4" />
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                </svg>
                Link reset password berlaku selama 60 menit
            </li>
            <li
                style="display: flex; align-items: flex-start; gap: 0.5rem; font-size: 0.85rem; color: var(--text-secondary);">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                    fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;">
                    <polyline points="9 11 12 14 22 4" />
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                </svg>
                Jika masalah berlanjut, hubungi tim support kami
            </li>
        </ul>
    </div>

    <!-- Login Link -->
    <div class="auth-switch">
        <p>Ingat password Anda? <a href="{{ route('login') }}">Masuk</a></p>
    </div>

@endsection
