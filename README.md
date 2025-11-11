# 🎓 Yearbook Angkatan 2025/2026  
### Politeknik LP3I Jakarta Kampus Cimone

Selamat datang di proyek **Yearbook Angkatan 2025/2026**!  
Aplikasi ini dibuat untuk menampilkan profil, kenangan, dan dokumentasi mahasiswa Politeknik LP3I Jakarta Kampus Cimone secara digital dan interaktif.

---

## 🧭 Deskripsi Proyek
Project ini adalah sistem **yearbook digital berbasis web** yang menampilkan:
- Profil mahasiswa per kelas dan jurusan  
- Galeri foto dan video kegiatan  
- Timeline perjalanan angkatan  
- Fitur CRUD admin untuk mengelola data mahasiswa, galeri, dan kelas  
- Tampilan yang **modern dan responsive** menggunakan **Tailwind CSS**  

---

## 🧩 Teknologi yang Digunakan
| Komponen | Teknologi |
|----------|------------|
| Framework Backend | Laravel 12 |
| Frontend | Blade + Tailwind CSS |
| Database | MySQL |
| Chart & Statistik | Chart.js |
| Bahasa Pemrograman | PHP 8.2+ |
| Server Lokal | Laravel Artisan / XAMPP / Laragon |

---

## ⚙️ Instalasi & Konfigurasi

### 1️⃣ Clone Repository
```bash
git clone https://github.com/username/yearbook-lp3i-cimone.git
cd yearbook-lp3i-cimone
2️⃣ Install Dependency
bash
Copy code
composer install
npm install
npm run build
3️⃣ Buat File .env
bash
Copy code
cp .env.example .env
Edit konfigurasi sesuai kebutuhan:

env
Copy code
APP_NAME="Yearbook LP3I Cimone"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yearbook_lp3i
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Generate Key Aplikasi
bash
Copy code
php artisan key:generate
5️⃣ Migrasi Database
bash
Copy code
php artisan migrate --seed
6️⃣ Jalankan Server
bash
Copy code
php artisan serve
Buka di browser:

cpp
Copy code
http://127.0.0.1:8000