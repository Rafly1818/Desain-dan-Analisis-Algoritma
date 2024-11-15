# Business Requirement Document (BRD)
**Project**: Tema Data Kendaraan  
**Tanggal**: 15 November 2024 
**Versi**: 1.0  
**Penyusun**: Rafly Akbar Ravsanjani
**NIM**: 20230801401

---

## 1. Tujuan Proyek
Sistem Manajemen Kendaraan ini bertujuan untuk menyediakan solusi terintegrasi dalam pengelolaan informasi terkait kendaraan, pemilik kendaraan, jadwal servis, jenis kendaraan, dan riwayat servis. Sistem ini dirancang untuk membantu admin bengkel, mekanik, dan pemilik kendaraan dalam memantau dan mengelola informasi kendaraan secara efisien, terstruktur, dan akurat.

---

## 2. Deskripsi Latar Belakang
Banyak bengkel dan perusahaan armada membutuhkan sistem untuk manajemen data kendaraan secara terstruktur dan otomatis. Dengan sistem ini, diharapkan pengelolaan data kendaraan, jadwal servis, dan informasi pemilik kendaraan menjadi lebih efisien dan akurat, sehingga mengurangi risiko kesalahan dalam pencatatan.

---

## 3. Ruang Lingkup Sistem
Sistem Manajemen Kendaraan ini mencakup beberapa modul utama:

- **Modul Manajemen Pemilik**: Mengelola data pemilik kendaraan.
- **Modul Manajemen Kendaraan**: Mengelola data kendaraan, seperti jenis kendaraan, plat nomor, dan pemilik.
- **Modul Jenis Kendaraan**: Menyediakan informasi tipe kendaraan yang tersedia.
- **Modul Jadwal Servis**: Mengatur penjadwalan perawatan kendaraan.
- **Modul Riwayat Servis**: Mencatat riwayat servis kendaraan.

---

## 4. Fungsi Utama Sistem

### 4.1 Pengelolaan Data Pemilik
- **Tambah Pemilik**: Menambah data pemilik kendaraan baru.
- **Perbarui & Hapus Pemilik**: Memperbarui atau menghapus data pemilik.
- **Lihat Data Pemilik**: Admin melihat semua data, pemilik melihat datanya sendiri.

### 4.2 Pengelolaan Data Kendaraan
- **Tambah Kendaraan**: Menambahkan kendaraan yang dimiliki pemilik.
- **Perbarui & Hapus Kendaraan**: Memperbarui atau menghapus data kendaraan.
- **Lihat Data Kendaraan**: Admin dan mekanik dapat melihat semua data kendaraan; pemilik melihat miliknya saja.

### 4.3 Pengelolaan Jenis Kendaraan
- **Tambah Jenis Kendaraan**: Menambah jenis kendaraan baru.
- **Kelola Jenis Kendaraan**: Mengelola jenis kendaraan yang tersedia.

### 4.4 Manajemen Jadwal Servis
- **Atur Jadwal Servis**: Menetapkan jadwal servis untuk kendaraan.
- **Notifikasi Jadwal**: Mengirimkan notifikasi kepada pemilik.
- **Pembatalan & Perubahan Jadwal**: Jadwal dapat diubah atau dibatalkan.

### 4.5 Pengelolaan Riwayat Servis
- **Tambah Catatan Servis**: Menambahkan catatan riwayat servis.
- **Lihat Riwayat Servis**: Menyediakan riwayat servis kendaraan.

---

## 5. Jenis Pengguna dan Hak Akses

| Jenis Pengguna      | Hak Akses                                                                                   |
|---------------------|---------------------------------------------------------------------------------------------|
| **Admin**           | Akses penuh untuk mengelola semua data di sistem.                                           |
| **Mekanik**         | Mencatat riwayat servis dan melihat data kendaraan yang perlu diservis.                    |
| **Pemilik Kendaraan** | Melihat data kendaraan, jadwal servis, dan riwayat servis kendaraannya sendiri.          |

---

## 6. Persyaratan Sistem

### 6.1 Persyaratan Fungsional
- **Manajemen Data**: Dapat mengelola data pemilik, kendaraan, jenis, jadwal, dan riwayat servis.
- **Notifikasi**: Mengirimkan notifikasi servis ke pemilik.
- **Keamanan Akses**: Otentikasi pengguna sesuai dengan peran masing-masing.

### 6.2 Persyaratan Non-Fungsional
- **Efisiensi**: Sistem harus cepat dan responsif.
- **Keamanan Data**: Proteksi terhadap akses tidak sah.
- **Ketersediaan**: Dapat diakses setiap waktu.

---

## 7. Alur Proses

1. **Admin Login**: Admin melakukan login untuk mengakses modul.
2. **Pengelolaan Data**: Admin menambah, memperbarui, atau menghapus data pemilik dan kendaraan.
3. **Penjadwalan Servis**: Admin/mekanik menetapkan jadwal servis dan notifikasi terkirim ke pemilik.
4. **Proses Servis**: Mekanik mencatat riwayat servis setelah perawatan selesai.
5. **Akses Pemilik**: Pemilik mengakses data kendaraan, jadwal, dan riwayat servis.

---

## 8. Keuntungan Sistem

- **Efisiensi Operasional**: Menghemat waktu admin dan mekanik.
- **Mengurangi Kesalahan**: Meningkatkan akurasi dalam pencatatan data.
- **Transparansi**: Pemilik dapat memantau jadwal dan riwayat kendaraan mereka.
- **Pemeliharaan Terjadwal**: Mengurangi risiko kerusakan besar dengan servis tepat waktu.

---

## 9. Kesimpulan
Sistem Manajemen Kendaraan ini akan membantu bengkel dalam mengelola informasi kendaraan dan proses servis dengan lebih efisien dan terstruktur. Sistem ini menawarkan fungsionalitas yang lengkap dan akses yang aman untuk setiap jenis pengguna, meningkatkan layanan dan kepercayaan pelanggan.

---

