# 🚗 Sistem Manajemen Kendaraan 🚗

Sistem Manajemen Kendaraan ini adalah sebuah aplikasi untuk membantu pengguna dalam mengelola dan melacak data kendaraan secara efisien. Proyek ini dibangun menggunakan [sebutkan stack teknologi Anda, seperti Laravel, Docker, dsb.].

## ✨ Fitur Utama

- **Pelacakan Kendaraan**: Kelola berbagai informasi kendaraan seperti registrasi, merk, model, dan pemilik.
- **Catatan Perawatan**: Catat dan kelola jadwal serta riwayat perawatan kendaraan.
- **Laporan**: Buat laporan mengenai penggunaan kendaraan, riwayat perawatan, dan metrik penting lainnya.
- **Manajemen Pengguna**: Tetapkan peran pengguna untuk kontrol akses dan izin.
- **UI Responsif**: Antarmuka ramah pengguna yang memudahkan navigasi.

## 🚀 Memulai

### Prasyarat

- [Daftar perangkat lunak yang dibutuhkan: Docker, VSCode, NaviCat, Ubuntu]

### Instalasi

1. **Kloning repositori ini**:
    ```bash
    git clone https://github.com/UsernameAnda/NamaRepoAnda.git
    cd NamaRepoAnda
    ```

2. **Konfigurasi Lingkungan**:
    - Salin `.env.example` menjadi `.env` dan atur variabel-variabel sesuai kebutuhan.

3. **Instalasi Dependensi**:
    ```bash
    composer install
    npm install
    ```

4. **Buat Application Key**:
    ```bash
    php artisan key:generate
    ```

5. **Jalankan Migrasi Database**:
    ```bash
    php artisan migrate
    ```

### Pengaturan Docker (Opsional)

Jika Anda ingin menjalankan proyek ini di dalam container Docker:

1. **Bangun container Docker**:
    ```bash
    docker-compose up -d
    ```

2. **Akses container**:
    ```bash
    docker exec -it sample bash
    ```

### Pengaturan Kunci SSH untuk Git

Jika Anda mengalami masalah autentikasi dengan Git, atur SSH key untuk akun GitHub Anda:

1. **Buat kunci SSH**:
    ```bash
    ssh-keygen -t ed25519 -C "email-anda@example.com"
    ```

2. **Tambahkan kunci SSH ke agen SSH**:
    ```bash
    eval "$(ssh-agent -s)"
    ssh-add ~/.ssh/id_ed25519
    ```

3. **Tambahkan kunci SSH ke akun GitHub Anda** dengan menyalin isi dari kunci publik:
    ```bash
    cat ~/.ssh/id_ed25519.pub
    ```
   Ikuti panduan [GitHub tentang koneksi SSH](https://docs.github.com/en/github/authenticating-to-github/connecting-to-github-with-ssh) untuk menambahkan kunci ke akun Anda.

### Penggunaan

1. **Jalankan server**:
    ```bash
    php artisan serve
    ```

2. **Akses aplikasi di browser**:
   Kunjungi `http://localhost` untuk mulai menggunakan aplikasi.

## 📂 Struktur Proyek

- `src/` - Berisi kode sumber untuk sistem manajemen kendaraan.
- `database/` - Memuat file migrasi dan seed untuk setup database.
- `tests/` - Menyediakan unit dan feature test untuk aplikasi.

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan fork repositori ini dan ajukan pull request untuk tinjauan.

## 📜 Lisensi

Proyek ini dilisensikan di bawah [Lisensi MIT](LICENSE).

---

<p align="center">
  Dibuat dengan 💻 oleh <a href="https://github.com/Rafly1818">Rafly1818</a>
</p>
