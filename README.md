# Hill_Cipher

## Profil
| #               | Biodata                 |
| --------------- | ----------------------- |
| **Nama**        | Nabilah Ananda Putri    |
| **NIM**         | 312110263               |
| **Kelas**       | TI.21.A.1               |
| **Mata Kuliah** | Kriptografi             |

## Penjelasan

1. **functions.php:**
<p>Tujuan : Berisi fungsi-fungsi yang berkaitan dengan</p>
<p>Fungsi:</p>

- `hill_cipher($text, $key, $mode)`: Melakukan enkripsi atau dekripsi Hill Cipher.
- `determinant($matrix): Menghitung` determinan matriks 2x2.
- `matrix_multiply($matrix, $scalar)`: Mengalikan matriks dengan skalar.
- `matrix_modulo($matrix, $mod)`: Menerapkan operasi modulo ke setiap elemen matriks.
- `matrix_inverse($matrix, $mod)`: Menghitung invers matriks 2x2.

2. **hill_cipher.php**
<P>Tujuan: Memproses input pengguna, melakukan enkripsi atau dekripsi Hill Cipher, dan menyimpan hasilnya dalam database.</P>
<p>Fungsi:</p>

- Terhubung ke basis data.
- Mengambil input pengguna (teks biasa, kunci, mode) dari formulir.
- Memanggil hill_cipher fungsi dari `functions.php`.
- Memasukkan hasilnya (teks masukan, kunci, mode, hasil) ke dalam tabel `hasil_hill_cipher`.

3. **db_connection.php**
<p>Tujuan: Membuat koneksi ke database MySQL.</p>
<p>Fungsi:</p>

- `mysqli_connect()` berfungsi untuk membuat koneksi.
- Menangani potensi kesalahan koneksi.

## Hasil
- **Encrypt**
<img width="960" alt="Screenshot 2023-12-02 221908" src="https://github.com/nabilahap/Hill_Cipher/assets/92380488/101142d3-aa62-436b-8138-fbe385f7e271">

- **Decrypt**
![Screenshot (287)](https://github.com/nabilahap/Hill_Cipher/assets/92380488/7f1c715f-7bd6-4ffe-9fad-8023f9741931)

- **Data**
![BILAH](https://github.com/nabilahap/Hill_Cipher/assets/92380488/bec70fb2-2f0b-4a09-b9a0-c9ad4d40d47c)
