
---

### Analisis.md

```markdown
# Analisis Sistem - Sistem Manajemen Kendaraan

## 1. Analisis Kebutuhan
- **Tujuan**: Membangun sistem yang memudahkan pengelolaan data kendaraan, pemilik, dan riwayat servis secara terstruktur.
- **Lingkup**: Sistem ini digunakan oleh admin untuk mencatat dan mengelola data kendaraan serta riwayat servis.

## 2. Use Case Utama
### Use Case untuk Admin
- **Kelola Data Pemilik**: Admin dapat menambah, memperbarui, dan menghapus data pemilik.
- **Kelola Data Kendaraan**: Admin dapat menambah, memperbarui, dan menghapus data kendaraan.
- **Kelola Riwayat Servis**: Admin dapat mencatat riwayat servis kendaraan untuk pemantauan servis berkala.

## 3. Diagram Use Case
*(Sertakan gambar atau diagram di sini jika ada)*

## 4. Persyaratan Kebutuhan
### Persyaratan Fungsional
- Admin dapat mengelola data pemilik, kendaraan, dan riwayat servis.
- Setiap kendaraan terhubung dengan data pemilik dan memiliki riwayat servis.

### Persyaratan Non-Fungsional
- **Efisiensi**: Sistem harus responsif saat mengakses data kendaraan dan pemilik.
- **Keamanan**: Akses pengelolaan data dibatasi hanya untuk admin.

## 5. Alur Kerja Sistem
1. **Login Admin**:
   - Admin login untuk mendapatkan akses penuh ke sistem.
2. **Manajemen Data Pemilik**:
   - Admin menambah, mengubah, atau menghapus data pemilik kendaraan.
3. **Manajemen Data Kendaraan**:
   - Admin menambah, mengubah, atau menghapus data kendaraan.
4. **Pengelolaan Riwayat Servis**:
   - Admin menambah riwayat servis untuk mencatat informasi servis berkala.

## 6. Diagram Alur Sistem
*(Tambahkan diagram alur jika ada)*

## 7. Teknologi yang Digunakan
- **Framework**: Laravel
- **Database**: MySQL
- **Docker**: Untuk menjalankan aplikasi dalam lingkungan container

## 8. Rancangan Database
- **Tabel Pemilik**:
  - Kolom: id, nama, alamat, nomor_kontak
- **Tabel Kendaraan**:
  - Kolom: id, pemilik_id, merk, model, nomor_polisi, tahun
- **Tabel Servis**:
  - Kolom: id, kendaraan_id, tanggal_servis, jenis_servis, deskripsi
