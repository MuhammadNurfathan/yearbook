# 🎓 Yearbook Angkatan 2025/2026

<div align="center">

![Politeknik LP3I Jakarta](https://img.shields.io/badge/Politeknik-LP3I%20Jakarta-blue?style=for-the-badge)
![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

**Platform Yearbook Digital untuk Kampus Cimone**

[Demo](#) • [Dokumentasi](#) • [Lapor Bug](#)

</div>

---

## 📖 Tentang Proyek

**Yearbook Angkatan 2025/2026** adalah aplikasi web modern yang dirancang khusus untuk mendigitalisasi kenangan dan dokumentasi mahasiswa Politeknik LP3I Jakarta Kampus Cimone. Aplikasi ini menggabungkan teknologi terkini dengan desain yang elegan untuk menciptakan pengalaman yearbook yang interaktif dan berkesan.

### ✨ Fitur Utama

- 👤 **Manajemen Profil Mahasiswa** - Kelola data mahasiswa per kelas dan jurusan
- 📸 **Galeri Multimedia** - Upload dan tampilkan foto & video kegiatan kampus
- 📅 **Timeline Angkatan** - Dokumentasi perjalanan mahasiswa dari awal hingga wisuda
- 🎨 **Desain Responsif** - Tampilan optimal di semua perangkat (desktop, tablet, mobile)
- 🔐 **Admin Dashboard** - Panel kontrol lengkap untuk pengelolaan konten
- 📊 **Statistik & Analytics** - Visualisasi data dengan Chart.js
- 🔍 **Pencarian & Filter** - Temukan mahasiswa dengan mudah
- 💬 **Buku Kenangan** - Fitur untuk menulis pesan dan kesan

---

## 🛠️ Tech Stack

| Kategori | Teknologi |
|----------|-----------|
| **Backend Framework** | Laravel 12 |
| **Frontend** | Blade Templates + Tailwind CSS |
| **Database** | MySQL 8.0+ |
| **Charting Library** | Chart.js |
| **Language** | PHP 8.2+ |
| **Package Manager** | Composer, NPM |
| **Version Control** | Git |

---

## 🚀 Quick Start

### Persyaratan Sistem

Pastikan sistem Anda memenuhi requirement berikut:

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL >= 8.0
- Git

### 📦 Instalasi

#### 1. Clone Repository

```bash
git clone https://github.com/username/yearbook-lp3i-cimone.git
cd yearbook-lp3i-cimone
```

#### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Build assets
npm run build
```

#### 3. Konfigurasi Environment

```bash
# Copy file environment
cp .env.example .env

# Generate application key
php artisan key:generate
```

Edit file `.env` sesuai konfigurasi Anda:

```env
APP_NAME="Yearbook LP3I Cimone"
APP_ENV=local
APP_KEY=base64:xxxxx
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yearbook_lp3i
DB_USERNAME=root
DB_PASSWORD=

FILESYSTEM_DISK=public
```

#### 4. Setup Database

```bash
# Jalankan migrasi dan seeder
php artisan migrate --seed

# Link storage untuk file uploads
php artisan storage:link
```

#### 5. Jalankan Aplikasi

```bash
# Start development server
php artisan serve
```

Buka browser dan akses: **http://127.0.0.1:8000**

---

## 👥 Default Login Credentials

Setelah menjalankan seeder, gunakan kredensial berikut:

| Role | Email | Password |
|------|-------|----------|
| Admin | admin@lp3i.ac.id | admin123 |
| Mahasiswa | mahasiswa@lp3i.ac.id | mahasiswa123 |

> ⚠️ **Penting**: Segera ubah password default setelah login pertama kali!

---

## 📁 Struktur Project

```
yearbook-lp3i-cimone/
├── app/
│   ├── Http/Controllers/    # Controllers
│   ├── Models/              # Eloquent Models
│   └── Services/            # Business Logic
├── database/
│   ├── migrations/          # Database Migrations
│   └── seeders/             # Database Seeders
├── public/
│   ├── images/              # Static Images
│   └── storage/             # Uploaded Files
├── resources/
│   ├── views/               # Blade Templates
│   ├── css/                 # Stylesheets
│   └── js/                  # JavaScript Files
├── routes/
│   └── web.php              # Web Routes
└── tests/                   # Unit & Feature Tests
```

---

## 🎨 Screenshot

<div align="center">

### 🏠 Homepage
![Homepage Preview](#)

### 👤 Profil Mahasiswa
![Profile Preview](#)

### 📸 Galeri
![Gallery Preview](#)

</div>

---

## 🧪 Development

### Menjalankan Tests

```bash
# Jalankan semua tests
php artisan test

# Jalankan test spesifik
php artisan test --filter=NamaTest
```

### Build untuk Production

```bash
# Optimize autoloader
composer install --optimize-autoloader --no-dev

# Compile assets
npm run build

# Cache konfigurasi
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 🤝 Contributing

Kami menerima kontribusi dari siapa saja! Berikut cara berkontribusi:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

---

## 📝 License

Project ini dilisensikan di bawah [MIT License](LICENSE).

---

## 👨‍💻 Developer

Dikembangkan dengan ❤️ oleh Tim IT Politeknik LP3I Jakarta Kampus Cimone

- **Project Lead**: [Nama Anda]
- **Backend Developer**: [Nama Tim]
- **Frontend Developer**: [Nama Tim]
- **UI/UX Designer**: [Nama Tim]

---

## 📞 Kontak & Support

- 🌐 Website: [lp3i.ac.id](https://lp3i.ac.id)
- 📧 Email: info@lp3i.ac.id
- 📱 Instagram: [@lp3i_cimone](#)
- 💬 WhatsApp: +62 xxx xxxx xxxx

---

## 🙏 Acknowledgments

Terima kasih kepada:
- Politeknik LP3I Jakarta atas dukungan dan fasilitas
- Laravel Community untuk framework yang luar biasa
- Semua kontributor yang telah membantu project ini

---

<div align="center">

**⭐ Jangan lupa berikan star jika project ini bermanfaat!**

Made with ❤️ in Jakarta, Indonesia

</div>