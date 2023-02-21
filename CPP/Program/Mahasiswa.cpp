/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

// Library
#include <iostream>
#include <string>

// using standard namespace
using namespace std;

// Membuat kelas Mahasiswa yang merupakan anak dari kelas Human
class Mahasiswa : public Human
{
    // deklarasi atribut privat
private:
    string nim;
    string fakultas;
    string prodi;

    // deklarasi method public
public:
    // konstruktor
    Mahasiswa()
    {
    }
    // method untuk mengset atribut nim
    void setNim(string nim)
    {
        this->nim = nim;
    }
    // method untuk mengset atribut fakultas
    void setFakultas(string fakultas)
    {
        this->fakultas = fakultas;
    }
    // method untuk mengset atribut prodi
    void setProdi(string prodi)
    {
        this->prodi = prodi;
    }
    // method untuk mengambil nilai atribut Nim
    string getNim()
    {
        return this->nim;
    }
    // method untuk mengambil nilai atribut fakultas
    string getFakultas()
    {
        return this->fakultas;
    }
    // method untuk mengambil nilai atribut prodi
    string getProdi()
    {
        return this->prodi;
    }

    // destruktor
    ~Mahasiswa()
    {
    }
};