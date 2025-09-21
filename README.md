# 📚 Sistem Mahasiswa

Aplikasi web sederhana untuk mengelola data mahasiswa dengan tampilan yang modern dan responsif menggunakan PHP MVC pattern.

## ✨ Fitur

- 🎨 **Tampilan Modern** - Bootstrap 5 dengan styling yang profesional
- 📱 **Responsive Design** - Mobile-friendly untuk semua perangkat
- ✅ **Form Validation** - Validasi real-time dengan JavaScript
- 🎯 **Icons Font Awesome** - UI yang lebih menarik dan intuitif
- 📊 **Tabel Data Modern** - Styling yang bagus dengan hover effects
- 🧭 **Navigasi Konsisten** - Header dan footer yang seragam
- 🗑️ **Konfirmasi Hapus** - Proteksi dari penghapusan tidak sengaja
- 🔒 **Security** - Protection dari XSS dengan htmlspecialchars()

## 🏗️ Struktur Aplikasi

```
Pemweb/
├── config/
│   └── database.php              # Konfigurasi database
├── controllers/
│   └── MahasiswaController.php   # Controller utama (MVC)
├── models/
│   └── mahasiswa.php             # Model untuk operasi database
├── views/
│   ├── layout.php                # Template layout utama
│   ├── mahasiswa_index.php       # Halaman daftar mahasiswa
│   ├── mahasiswa_create.php      # Form tambah mahasiswa
│   └── mahasiswa_edit.php        # Form edit mahasiswa
├── index.php                     # Entry point aplikasi
├── .gitignore                    # Git ignore file
└── README.md                     # Dokumentasi ini
```

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP 7.4+ dengan MVC Pattern
- **Frontend**: Bootstrap 5, Font Awesome 6
- **Database**: MySQL 5.7+
- **Server**: Apache (XAMPP)

## 🚀 Cara Menjalankan

### Prerequisites
- XAMPP atau LAMP/WAMP stack
- PHP 7.4 atau lebih tinggi
- MySQL 5.7 atau lebih tinggi

### Installation

1. **Clone repository:**
   ```bash
   git clone https://github.com/username/pemweb-mahasiswa.git
   ```

2. **Setup database:**
   - Buka phpMyAdmin: `http://localhost/phpmyadmin`
   - Buat database baru: `pemweb`
   - Import atau jalankan SQL berikut:
   ```sql
   CREATE TABLE mahasiswa (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nama VARCHAR(100) NOT NULL,
       nim VARCHAR(20) NOT NULL UNIQUE,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. **Konfigurasi database:**
   - Edit file `config/database.php`
   - Sesuaikan host, username, password sesuai environment Anda

4. **Jalankan aplikasi:**
   - Start Apache dan MySQL di XAMPP
   - Buka browser: `http://localhost/pemweb-mahasiswa`

## 📱 Screenshot

### Halaman Utama
- Tampilan tabel yang modern dengan avatar dan badge
- Tombol aksi yang terorganisir dengan baik
- Responsive design untuk mobile

### Form Tambah/Edit
- Form dengan validasi real-time
- Styling yang konsisten
- Placeholder dan label yang informatif

## 🔧 Perbaikan yang Dilakukan

1. **Layout Template**: Dibuat template layout yang konsisten dengan Bootstrap
2. **Styling Modern**: Menggunakan Bootstrap 5 untuk tampilan yang profesional
3. **Icons**: Menambahkan Font Awesome icons untuk UI yang lebih menarik
4. **Responsive**: Desain yang responsif untuk berbagai ukuran layar
5. **Form Validation**: Validasi form dengan JavaScript
6. **UX Improvements**: 
   - Konfirmasi sebelum hapus
   - Loading states
   - Better error handling
   - Consistent navigation

## 📝 API Endpoints

| Method | URL | Description |
|--------|-----|-------------|
| GET | `/` | Halaman utama (daftar mahasiswa) |
| GET | `/?action=create` | Form tambah mahasiswa |
| POST | `/?action=create` | Proses tambah mahasiswa |
| GET | `/?action=edit&id={id}` | Form edit mahasiswa |
| POST | `/?action=edit&id={id}` | Proses update mahasiswa |
| GET | `/?action=delete&id={id}` | Hapus mahasiswa |

## 🤝 Kontribusi

1. Fork repository ini
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buka Pull Request

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

## 👨‍💻 Author

**Your Name**
- GitHub: [@yourusername](https://github.com/yourusername)
- Email: your.email@example.com

## 🙏 Acknowledgments

- Bootstrap team untuk framework CSS yang luar biasa
- Font Awesome untuk icons yang beautiful
- XAMPP untuk development environment
