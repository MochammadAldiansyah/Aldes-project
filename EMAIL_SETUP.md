# Panduan Konfigurasi Email untuk Reset Password

## Langkah 1: Konfigurasi .env

Untuk mengaktifkan fitur reset password melalui email, Anda perlu mengkonfigurasi SMTP di file `.env`.

### Contoh Konfigurasi dengan Gmail:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=email_anda@gmail.com
MAIL_PASSWORD=app_password_anda
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=email_anda@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

**Catatan:** Untuk Gmail, Anda perlu menggunakan App Password, bukan password biasa.
Cara mendapatkan App Password:
1. Buka Google Account Settings
2. Pilih Security
3. Aktifkan 2-Step Verification
4. Buat App Password untuk "Mail"

### Contoh Konfigurasi dengan Mailtrap (untuk Development):

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=username_mailtrap_anda
MAIL_PASSWORD=password_mailtrap_anda
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@aldes.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Contoh Konfigurasi dengan Mailgun:

```env
MAIL_MAILER=mailgun
MAILGUN_DOMAIN=your-domain.mailgun.org
MAILGUN_SECRET=key-xxxxxxxxxxxxxx
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Langkah 2: Clear Config Cache

Setelah mengubah `.env`, jalankan perintah berikut:

```bash
php artisan config:clear
php artisan cache:clear
```

## Langkah 3: Test Email

Anda bisa test pengiriman email dengan Tinker:

```bash
php artisan tinker
```

Kemudian jalankan:

```php
Mail::raw('Test email', function ($message) {
    $message->to('email_penerima@example.com')
            ->subject('Test Email');
});
```

## Langkah 4: Customisasi Email Template (Opsional)

Untuk customisasi tampilan email notifikasi, publish vendor files:

```bash
php artisan vendor:publish --tag=laravel-notifications
php artisan vendor:publish --tag=laravel-mail
```

File template akan muncul di:
- `resources/views/vendor/notifications/`
- `resources/views/vendor/mail/`

## Troubleshooting

1. **Email tidak terkirim:**
   - Pastikan konfigurasi SMTP benar
   - Cek file `storage/logs/laravel.log` untuk error

2. **Timeout saat mengirim:**
   - Gunakan queue untuk pengiriman email
   - Jalankan `php artisan queue:work`

3. **Email masuk ke spam:**
   - Gunakan domain yang terverifikasi
   - Tambahkan SPF dan DKIM records
