# Rental Mobil APP
## Instalasi
Sebelum install aplikasi pastikan sudah membuat database, misal:
```
create schema namadb
```

1. Install dependency `composer install`

2. Copy `.env.example` file dan rename ke `.env`. Konfigurasi database di `.env` file.

3. Jalankan `php artisan migrate`

4. Jalankan `php artisan db:seed`

5. `npm install` && `npm run dev`

6. Buat symbolic link `php artisan storage:link`

7. Mulai development server `php artisan serve`

8. Kunjungi `http://localhost:8000` di browser
