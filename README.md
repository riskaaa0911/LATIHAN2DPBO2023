# LATIHAN2DPBO2023
## Janji
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program


![prak_dpbo2 drawio (2)](https://user-images.githubusercontent.com/119839421/220388337-928ca90b-67f7-4448-9708-70922df52188.png)

Program menerapkan konsep multilevel inheritance dimana terdapat 3 kelas yaitu:
1. Class Human, berisi atribut nik, nama, dan gender.
2. Class Mahasiswa, berisi atribut nim, fakultas dan prodi. Kelas Mahasiswa ini merupakan child/anak dari kelas Human, sehingga kelas Mahasiswa dapat mengakses atribut dan method pada kelas Human.
3. Class SivitasAkademik, berisi atribut asal_univ dan email. Kelas SivitasAkademik merupakan anak dari kelas Mahasiswa dan cucu dari kelas Human, sehingga kelas SivitasAkademik dapat mengakses atribut dan method pada kelas Mahasiswa maupun kelas Human.

Kelas Mahasiswa menjadi anak dari kelas Human karena kelas Human memiliki atribut yang dibutuhkan oleh kelas Mahasiswa seperti nama dan gender. Kelas SivitasAkademik menjadi anak dari kelas Mahasiswa dan cucu dari kelas Human karena dalam kelas SivitasAkademik bisa membutuhkan atribut pada dua kelas tersebut, untuk memiliki email_edu tentunya harus merupakan bagian dari mahasiswa suatu universitas, dan Mahasiswa adalah seorang Human atau Manusia.

## Alur Program
Ketika menjalankan program C++ dan Python maka akan tampil 3 pilihan menu yaitu:

1. Lihat Data Mahasiswa
2. Tambah Data Mahasiswa
3. Keluar

- Terdapat inputan untuk memilih menu. Ketika memilih menu 1 maka program akan menampilkan data list/daftar Mahasiswa. Menu 1 akan menampilkan data mahasiswa yang sudah dihardcode ketika belum menginputkan data atau belum memilih menu 2.
- Ketika memilih menu 2, program akan meminta inputan jumlah data yang akan ditambahkan. Setelah itu data mahasiswa dapat ditambahkan sesuai jumlah yang diinput meliputi nik, nim, nama, gender, fakultas, prodi, asal universitas, dan email. Ketika sudah selesai, maka program akan memberikan pemberitahuan bahwa data tersebut sudah berhasil ditambahkan kedalam list.
- Ketika memilih menu 3 maka program akan berhenti, sebelum memilih menu 3 maka program akan terus berjalan atau dapat memilih menu 1 atau 2.

Untuk program PHP dan Java alur programnya berbeda dari bahasa yang lain. Pada program ini hanya menampilkan data daftar atau list mahasiswa saja yang inputannya dihardcode.

## Dokumentasi (Program Bahasa C++)
![Screenshot (300)](https://user-images.githubusercontent.com/119839421/220386227-7feb0dae-cdee-4bab-b2b9-8f601df3b414.png)

![Screenshot (301)](https://user-images.githubusercontent.com/119839421/220386241-e65a00a5-2a28-440c-9a56-e2f488aad290.png)
