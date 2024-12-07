## Kerjakan Soal Terkait Materi Query Join

Dosen pengampu *Arif Wicaksono Septyanto, M.Kom*

### **Struktur Database**

**Tabel `Mahasiswa`:**
| NIM   | Nama           | Umur | ID_Jurusan |
|-------|----------------|------|------------|
| 101   | Ahmad          | 20   | 1          |
| 102   | Budi           | 22   | 2          |
| 103   | Citra          | 21   | NULL       |
| 104   | Dina           | 23   | 3          |

**Tabel `Jurusan`:**
| ID_Jurusan | Nama_Jurusan            |
|------------|-------------------------|
| 1          | Teknik Informatika      |
| 2          | Matematika              |
| 3          | Fisika                  |
| 4          | Kimia                   |

**Tabel `Nilai`:**
| ID_Nilai | NIM   | Mata_Kuliah        | Nilai |
|----------|-------|--------------------|-------|
| 1        | 101   | Sistem Basis Data  | A     |
| 2        | 101   | Kalkulus           | B     |
| 3        | 102   | Aljabar Linear     | B+    |
| 4        | 103   | Fisika Kuantum     | A-    |

---

### **Soal Tugas Query JOIN**

#### **1. INNER JOIN**
1. Buat query untuk menampilkan nama mahasiswa (`Nama`) beserta nama jurusan mereka (`Nama_Jurusan`). Gunakan `INNER JOIN` antara tabel `Mahasiswa` dan `Jurusan`.

2. Tampilkan nama mahasiswa (`Nama`), mata kuliah (`Mata_Kuliah`), dan nilai (`Nilai`). Gunakan `INNER JOIN` antara tabel `Mahasiswa` dan `Nilai`.

---

#### **2. LEFT JOIN**
3. Buat query untuk menampilkan semua mahasiswa, termasuk mahasiswa yang **belum memiliki jurusan**. Sertakan kolom `Nama` dari tabel `Mahasiswa` dan `Nama_Jurusan` dari tabel `Jurusan`. Gunakan `LEFT JOIN`.

4. Tampilkan semua mata kuliah beserta nilai, termasuk nilai yang tidak memiliki data mahasiswa terkait. Gunakan `LEFT JOIN`.

---

#### **3. RIGHT JOIN**
5. Buat query untuk menampilkan semua jurusan (`Nama_Jurusan`), termasuk jurusan yang **belum memiliki mahasiswa**. Gunakan `RIGHT JOIN`.

6. Tampilkan semua data dari tabel `Nilai`, termasuk nilai yang mungkin tidak memiliki data mahasiswa terkait. Gunakan `RIGHT JOIN`.

---

#### **4. FULL JOIN**
7. Buat query untuk menampilkan semua mahasiswa beserta jurusan mereka, termasuk mahasiswa tanpa jurusan dan jurusan tanpa mahasiswa. Gunakan `FULL JOIN`.

---