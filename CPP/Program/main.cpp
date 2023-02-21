/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

// library
#include <bits/stdc++.h>
#include "Human.cpp"
#include "Mahasiswa.cpp"
#include "SivitasAkademik.cpp"

int main()
{
    list<SivitasAkademik> data; // deklarasi list dari objek SivitasAkademik

    SivitasAkademik mhs; // instansiasi objek SivitasAkademik

    // set atribut dari objek SivitasAkademik
    // Karena SivitasAKademik merupakan anak dari Mahasiswa dan cucu dari Human
    // maka dapat mengakses atribut di kelas Mahasiswa dan Human
    mhs.setNik("12345678");
    mhs.setNim("2109103");
    mhs.setNama("Riska");
    mhs.setGender("Famale");
    mhs.setFakultas("FPMIPA");
    mhs.setProdi("Ilkom");
    mhs.setUniv("UPI");
    mhs.setEmail("riskanurohmah@upi.edu");
    // memasukan data kedalam list
    data.push_back(mhs);

    // Tampilan menu
    cout << "*----------------------------*" << '\n';
    cout << "*            MENU            *" << '\n';
    cout << "*----------------------------*" << '\n';
    cout << "* 1. Lihat  Data Mahasiswa   *" << '\n';
    cout << "* 2. Tambah Data Mahasiswa   *" << '\n';
    cout << "* 3. Keluar                  *" << '\n';
    cout << "*----------------------------*" << '\n';
    // inisialisasi
    int n = 0;
    int i = 0;
    int nomor = 0;
    // deklarasi string
    string nik;
    string nim;
    string nama;
    string gender;
    string fakultas;
    string prodi;
    string univ;
    string email;
    // perulangan untuk memilih menu, perulangan selesai jika memilih menu 3
    do
    {
        cout << '\n'
             << "Pilih menu : ";
        // memasukan pilihan menu
        cin >> nomor;
        cout << '\n';
        // jika menu 1 maka menampilkan data list nya
        if (nomor == 1)
        {
            i = 0;
            cout << "====Daftar Mahasiswa UPI Angkatan 2021===" << '\n';
            for (list<SivitasAkademik>::iterator it = data.begin(); it != data.end(); it++)
            {
                cout << (i + 1) << ".";
                cout << "NIK         : " << it->getNik() << endl;
                cout << "  NIM         : " << it->getNim() << endl;
                cout << "  Nama        : " << it->getNama() << endl;
                cout << "  Gender      : " << it->getGender() << endl;
                cout << "  Fakultas    : " << it->getFakultas() << endl;
                cout << "  Prodi       : " << it->getProdi() << endl;
                cout << "  Universitas : " << it->getUniv() << endl;
                cout << "  Email       : " << it->getEmail() << endl;
                i++;
            }
        }
        // jika menu 2 maka harus menginputkan data sebanyak n atau jml data yang ingin ditambahkan
        else if (nomor == 2)
        {
            cout << "Jumlah data yang akan ditambahkan: ";
            cin >> n;
            for (i = 0; i < n; i++)
            {
                cout << "Masukan data Mahasiswa ke-" << (i + 1) << " yang akan ditambahkan:" << '\n';
                cout << "NIK: ";
                cin >> nik;
                cout << "NIM: ";
                cin >> nim;
                cout << "Nama: ";
                cin >> nama;
                cout << "Gender: ";
                cin >> gender;
                cout << "Fakultas: ";
                cin >> fakultas;
                cout << "Prodi: ";
                cin >> prodi;
                cout << "Universitas: ";
                cin >> univ;
                cout << "Email: ";
                cin >> email;

                SivitasAkademik temp;
                temp.setNik(nik);
                temp.setNim(nim);
                temp.setNama(nama);
                temp.setGender(gender);
                temp.setFakultas(fakultas);
                temp.setProdi(prodi);
                temp.setUniv(univ);
                temp.setEmail(email);
                data.push_back(temp);
            }
            cout << '\n'
                 << "Data Berhasil ditambahkan!" << '\n';
        }

    } while (nomor != 3);

    cout << "Terima Kasih:)" << endl;
    return 0;
}
