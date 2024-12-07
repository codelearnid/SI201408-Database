## Kerjakan Soal Terkait Materi Minggu Ke 5-6

Dosen pengampu *Arif Wicaksono Septyanto, M.Kom*

Indikator penilaian :

- Ketepatan mahasiswa memahami dan menggunakan SQL

Soal :

1. Database perpustakaan
   Buatkan database perpustakaan yang berisi tabel mahasiswa, buku, dosen, dan peminjaman menggunakan perintah SQL :

```sql
CREATE DATABASE perpustakaan;
```

Buatkan tabel mahasiswa :

```sql
CREATE TABLE mahasiswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(50),
    tahun_masuk YEAR
);
```

Buatkan tabel buku :

```sql
CREATE TABLE buku (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(100) NOT NULL,
    pengarang VARCHAR(100),
    penerbit VARCHAR(100),
    tahun_terbit YEAR
);
```

Buatkan tabel dosen :

```sql
CREATE TABLE dosen (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    nip VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(50)
);
```

Buatkan tabel peminjaman :

```sql
CREATE TABLE peminjaman (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_mahasiswa INT,
    id_buku INT,
    id_dosen INT,
    tanggal_pinjam DATE,
    tanggal_kembali DATE,
    FOREIGN KEY (id_mahasiswa) REFERENCES mahasiswa(id),
    FOREIGN KEY (id_buku) REFERENCES buku(id),
    FOREIGN KEY (id_dosen) REFERENCES dosen(id)
);
```

insert data mahasiswa:

```sql
INSERT INTO mahasiswa (nama, nim, jurusan, tahun_masuk) VALUES
('Ahmad Firdaus', '20190001', 'Teknik Informatika', 2019),
('Budi Santoso', '20190002', 'Sistem Informasi', 2019),
('Citra Dewi', '20200001', 'Teknik Sipil', 2020),
('Dian Purnama', '20210001', 'Manajemen', 2021),
('Eko Wibowo', '20180001', 'Teknik Mesin', 2018),
('Fitria Sari', '20190003', 'Arsitektur', 2019),
('Gilang Saputra', '20210002', 'Teknik Elektro', 2021),
('Hanafi Nur', '20170001', 'Sistem Informasi', 2017),
('Ika Pratama', '20220001', 'Teknik Kimia', 2022),
('Joko Susanto', '20180002', 'Teknik Informatika', 2018),
('Kartika Putri', '20200002', 'Sistem Informasi', 2020),
('Lia Novitasari', '20210003', 'Manajemen', 2021),
('Mikael Anggoro', '20190004', 'Teknik Sipil', 2019),
('Nina Anisa', '20220002', 'Arsitektur', 2022),
('Oka Wibisono', '20180003', 'Teknik Kimia', 2018),
('Putu Agung', '20200003', 'Teknik Elektro', 2020),
('Qori Maulana', '20170002', 'Teknik Mesin', 2017),
('Rina Puspita', '20220003', 'Sistem Informasi', 2022),
('Sinta Ayu', '20210004', 'Manajemen', 2021),
('Taufik Hidayat', '20190005', 'Teknik Informatika', 2019);
```

insert data buku :

```sql
INSERT INTO buku (judul, pengarang, penerbit, tahun_terbit) VALUES
('Pemrograman Web untuk Pemula', 'Ahmad Zulkarnain', 'Pustaka Teknologi', 2019),
('Sistem Informasi Manajemen', 'Budi Santoso', 'Gramedia', 2018),
('Dasar-Dasar Jaringan Komputer', 'Citra Dewi', 'Informatika Press', 2020),
('Pengantar Data Science', 'Dian Purnama', 'Andi Publisher', 2021),
('Algoritma dan Struktur Data', 'Eko Wibowo', 'Pustaka Teknologi', 2017),
('Rekayasa Perangkat Lunak', 'Fitria Sari', 'Gramedia', 2019),
('Pemrograman Mobile Android', 'Gilang Saputra', 'Informatika Press', 2020),
('Desain dan Analisis Sistem', 'Hanafi Nur', 'Pustaka Ilmu', 2021),
('Teknologi Cloud Computing', 'Ika Pratama', 'Techno Publisher', 2022),
('Manajemen Proyek IT', 'Joko Susanto', 'Informatika Press', 2018),
('Database Relasional', 'Kartika Putri', 'Andi Publisher', 2017),
('Kecerdasan Buatan untuk Pemula', 'Lia Novitasari', 'Pustaka Ilmu', 2019),
('Pemrograman Python', 'Mikael Anggoro', 'Techno Publisher', 2021),
('Pengantar Big Data', 'Nina Anisa', 'Informatika Press', 2022),
('Keamanan Jaringan Komputer', 'Oka Wibisono', 'Gramedia', 2020),
('Optimasi Algoritma', 'Putu Agung', 'Pustaka Teknologi', 2021),
('Internet of Things', 'Qori Maulana', 'Techno Publisher', 2022),
('Pemrograman Java', 'Rina Puspita', 'Informatika Press', 2019),
('Sistem Operasi', 'Sinta Ayu', 'Andi Publisher', 2018),
('Blockchain dan Aplikasinya', 'Taufik Hidayat', 'Pustaka Ilmu', 2022);
```

insert data dosen :

```sql
INSERT INTO dosen (nama, nip, jurusan) VALUES
('Dr. Ahmad Fadli', '19780001', 'Teknik Informatika'),
('Prof. Budi Santoso', '19650002', 'Sistem Informasi'),
('Dr. Citra Lestari', '19810003', 'Teknik Sipil'),
('Dian Prasetyo, M.T.', '19790004', 'Manajemen'),
('Eko Saputra, M.T.', '19850005', 'Teknik Mesin'),
('Fitria Widodo, M.Sc.', '19890006', 'Arsitektur'),
('Dr. Gilang Pratama', '19770007', 'Teknik Elektro'),
('Hanafi Kurnia, M.T.', '19680008', 'Sistem Informasi'),
('Ika Nurjanah, Ph.D.', '19820009', 'Teknik Kimia'),
('Dr. Joko Wibowo', '19760010', 'Teknik Informatika'),
('Kartika Putri, M.T.', '19840011', 'Sistem Informasi'),
('Lia Purnama, M.T.', '19870012', 'Manajemen'),
('Mikael Wijaya, Ph.D.', '19750013', 'Teknik Sipil'),
('Nina Kusuma, M.Sc.', '19860014', 'Arsitektur'),
('Oka Wicaksono, M.T.', '19790015', 'Teknik Kimia'),
('Prof. Putu Anggara', '19660016', 'Teknik Elektro'),
('Dr. Qori Rahmawati', '19830017', 'Teknik Mesin'),
('Rina Wijayanti, M.T.', '19880018', 'Sistem Informasi'),
('Sinta Ayu, Ph.D.', '19720019', 'Manajemen'),
('Taufik Hidayat, M.Sc.', '19810020', 'Teknik Informatika');
```

input data peminjam buku :

```sql
INSERT INTO peminjaman (id_mahasiswa, id_buku, id_dosen, tanggal_pinjam, tanggal_kembali) VALUES
(1, 3, 2, '2024-01-10', '2024-01-17'),
(2, 5, 1, '2024-02-01', '2024-02-08'),
(3, 7, 4, '2024-02-15', '2024-02-22'),
(4, 2, 5, '2024-03-05', '2024-03-12'),
(5, 9, 6, '2024-03-18', '2024-03-25'),
(6, 4, 7, '2024-04-01', '2024-04-08'),
(7, 6, 3, '2024-04-15', '2024-04-22'),
(8, 8, 2, '2024-04-28', '2024-05-05'),
(9, 10, 1, '2024-05-05', '2024-05-12'),
(10, 12, 4, '2024-05-15', '2024-05-22'),
(11, 1, 5, '2024-05-22', '2024-05-29'),
(12, 11, 3, '2024-06-01', '2024-06-08'),
(13, 14, 6, '2024-06-10', '2024-06-17'),
(14, 16, 7, '2024-06-20', '2024-06-27'),
(15, 13, 2, '2024-07-01', '2024-07-08'),
(16, 15, 1, '2024-07-05', '2024-07-12'),
(17, 18, 3, '2024-07-10', '2024-07-17'),
(18, 17, 4, '2024-07-15', '2024-07-22'),
(19, 19, 5, '2024-07-20', '2024-07-27'),
(20, 20, 6, '2024-07-25', '2024-08-01');
```
