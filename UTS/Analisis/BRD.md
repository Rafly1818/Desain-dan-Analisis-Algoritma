# Dokumen Kebutuhan Bisnis (BRD) - Sistem Manajemen Kendaraan

## 1. Tujuan Proyek
- **Objektif**: Aplikasi ini bertujuan untuk mempermudah pengelolaan data kendaraan, pemilik, dan riwayat servis. Dengan aplikasi ini, admin dapat mengelola informasi kendaraan secara efisien dan terstruktur.

## 2. Fitur Utama
### Untuk Admin
- **Pengelolaan Data Pemilik**: Menambah, mengubah, dan menghapus data pemilik kendaraan.
- **Pengelolaan Data Kendaraan**: Menambah, mengubah, dan menghapus data kendaraan beserta informasi lengkapnya.
- **Pengelolaan Riwayat Servis**: Mencatat riwayat servis kendaraan berdasarkan data kendaraan dan pemiliknya.

## 3. Persyaratan Fungsional
### Sistem Login
- **Akses Berdasarkan Peran**: Admin dapat login dan mengelola data, sementara pengguna umum hanya bisa mengakses informasi tertentu (opsional).

### Pengelolaan Data
- **Data Pemilik**:
  - Admin dapat menambah, memperbarui, dan menghapus data pemilik.
- **Data Kendaraan**:
  - Admin dapat menambah, memperbarui, dan menghapus data kendaraan.
- **Data Servis**:
  - Admin dapat menambah riwayat servis yang mencakup tanggal servis, jenis servis, dan detail lainnya.

## 4. Persyaratan Non-Fungsional
- **Kegunaan**: Antarmuka yang mudah digunakan dan intuitif untuk admin.
- **Keamanan**: Hanya admin yang memiliki akses penuh untuk mengelola data.
- **Efisiensi**: Sistem harus mampu menangani banyak data kendaraan dan pemilik dengan performa yang optimal.

## 5. Model, Migrasi, Seeder, dan Resource yang Dibutuhkan

```bash
docker exec -it sample bash
