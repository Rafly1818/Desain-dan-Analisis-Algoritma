# Penjelasan File .puml

## kasus1.puml

### Deskripsi:
File ini menggambarkan *Sistem Classroom* menggunakan diagram use case dalam UML (Unified Modeling Language). Aktor dan use case di sini menjelaskan interaksi antara pengguna sistem dan fungsionalitas yang ada.

### Aktor:
1. *Mahasiswa*
2. *Dosen*
3. *Admin Akademik*

### Use Case dalam paket "Sistem Classroom":
- *Login ke Sistem*: Mahasiswa, dosen, dan admin masuk ke sistem.
- *Mengikuti Kuliah*: Mahasiswa menghadiri kelas yang tersedia.
- *Mengerjakan Tugas*: Mahasiswa mengumpulkan tugas.
- *Menerima Materi Kuliah*: Mahasiswa menerima materi dari dosen.
- *Memberikan Nilai*: Dosen memberikan nilai kepada mahasiswa berdasarkan tugas atau ujian.
- *Melakukan Registrasi*: Mahasiswa melakukan registrasi untuk mengikuti kelas.
- *Mengelola Data Mahasiswa*: Admin mengelola data mahasiswa.
- *Mengelola Akun*: Mahasiswa, dosen, dan admin dapat mengelola akun masing-masing.

### Relasi:
- *Mahasiswa*:
  - Melakukan login ke sistem.
  - Mengikuti kelas, mengerjakan tugas, melakukan registrasi, dan mengelola akun.
  
- *Dosen*:
  - Login ke sistem, memberikan materi, menilai tugas, dan mengelola akun.

- *Admin Akademik*:
  - Login ke sistem, mengelola data mahasiswa, dan mengelola akun.

### Extend Features:
- Use case *Mengikuti Kuliah* memperluas tugas *Mengumpulkan Tugas* dan *Absensi Kelas*.
- Use case *Menerima Materi Kuliah* diperluas dengan *Membagikan File* dan *Mengumumkan Tenggat Waktu*.

---

## pert2.puml

### Deskripsi:
File ini menggambarkan *Sistem Restoran* menggunakan diagram use case. Sistem ini menunjukkan bagaimana interaksi antara pelanggan, pelayan, dan koki terjadi.

### Aktor:
1. *User* (Pengguna atau Pelanggan)
2. *Servent* (Pelayan)
3. *Chief* (Koki)

### Use Case dalam paket "Restoran":
- *Pesan Menu*: Pelanggan memesan makanan.
- *Bayar Pesanan*: Pelanggan membayar pesanan yang sudah dipesan.
- *Melaporkan Pesanan*: Pelayan melaporkan pesanan pelanggan ke koki.
- *Memasak Pesanan*: Koki memasak pesanan yang dilaporkan oleh pelayan.

### Relasi:
- *User (Pelanggan)*:
  - Memesan menu dan membayar pesanan.
  
- *Servent (Pelayan)*:
  - Melaporkan pesanan pelanggan ke koki.

- *Chief (Koki)*:
  - Memasak pesanan yang sudah diterima dari pelayan.
