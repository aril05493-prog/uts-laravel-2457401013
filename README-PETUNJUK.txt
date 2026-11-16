
PAKET SOURCE UTS WEB DEVELOPMENT
Nama: Aril Saputra
NIM: 2457401013
Tema: Rental Mobil
Laravel: kompatibel dengan struktur Laravel 10/11/12 (gunakan project Laravel baru)

CARA MEMASANG:
1. Buat project:
   composer create-project laravel/laravel uts-laravel-2457401013
2. Masuk folder:
   cd uts-laravel-2457401013
3. Buat database MySQL bernama uts_2457401013.
4. Atur .env:
   DB_DATABASE=uts_2457401013
   DB_USERNAME=root
   DB_PASSWORD=
5. Salin isi folder app, database, resources, routes dari paket ini ke project Laravel (gabungkan folder).
6. Jalankan:
   php artisan migrate
   php artisan db:seed
   php artisan serve
7. Buka http://127.0.0.1:8000

CATATAN:
- Migration cars membuat kolom utama. Migration kedua menambahkan color, sesuai instruksi soal bahwa migration lama tidak boleh diedit.
- Seeder menghasilkan 13 data.
- Footer berisi nama dan NIM.
- Sebelum menjalankan migrate, pastikan database sudah dibuat dan konfigurasi .env benar.
- Jangan upload file .env, vendor/, atau node_modules/ ke GitHub.
