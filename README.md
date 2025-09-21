# Sistem Mahasiswa

Aplikasi web sederhana untuk mengelola data mahasiswa dengan tampilan yang modern dan responsif.

## Fitur

- ✅ Tampilan modern dengan Bootstrap 5
- ✅ Responsive design (mobile-friendly)
- ✅ Form validation dengan JavaScript
- ✅ Icons Font Awesome untuk UI yang lebih menarik
- ✅ Tabel data dengan styling yang bagus
- ✅ Navigasi yang konsisten di semua halaman
- ✅ Konfirmasi sebelum menghapus data

## Struktur Aplikasi

```
Pemweb/
├── config/
│   └── database.php          # Konfigurasi database
├── controllers/
│   └── MahasiswaController.php # Controller utama
├── models/
│   └── mahasiswa.php         # Model untuk operasi database
├── views/
│   ├── layout.php            # Template layout utama
│   ├── mahasiswa_index.php   # Halaman daftar mahasiswa
│   ├── mahasiswa_create.php  # Form tambah mahasiswa
│   └── mahasiswa_edit.php    # Form edit mahasiswa
├── index.php                 # Entry point aplikasi
└── README.md                 # Dokumentasi ini
```

## Teknologi yang Digunakan

- **Backend**: PHP (MVC Pattern)
- **Frontend**: Bootstrap 5, Font Awesome
- **Database**: MySQL (melalui config/database.php)

## Cara Menjalankan

1. Pastikan XAMPP sudah terinstall dan berjalan
2. Copy folder aplikasi ke `C:\xampp\htdocs\Pemweb`
3. Buat database MySQL dan sesuaikan konfigurasi di `config/database.php`
4. Buka browser dan akses `http://localhost/Pemweb`

## Screenshot

### Halaman Utama
- Tampilan tabel yang modern dengan avatar dan badge
- Tombol aksi yang terorganisir dengan baik
- Responsive design untuk mobile

### Form Tambah/Edit
- Form dengan validasi real-time
- Styling yang konsisten
- Placeholder dan label yang informatif

## Perbaikan yang Dilakukan

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

## Kontribusi

Silakan fork repository ini dan submit pull request untuk perbaikan atau fitur baru.
