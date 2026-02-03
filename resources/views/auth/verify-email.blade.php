<x-auth-layout title="Verifikasi Email">
    <div class="mobile-logo">
        <x-application-logo />
    </div>

    <div class="form-header">
        <h2>Verifikasi Email Anda</h2>
        <p>Satu langkah lagi untuk memulai</p>
    </div>

    <div class="info-box">
        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
        </svg>
        <p>Terima kasih telah mendaftar! Silakan verifikasi alamat email Anda.</p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="session-status">
            <svg class="status-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <p>Link verifikasi baru telah dikirim.</p>
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}" style="margin-bottom: 1rem;">
        @csrf
        <button type="submit" class="btn btn-primary">Kirim Ulang Email Verifikasi</button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline" style="width: 100%;">Keluar</button>
    </form>
</x-auth-layout>
