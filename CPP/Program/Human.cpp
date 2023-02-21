/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

// Library
#include <iostream>
#include <string>

// using standard namespace
using namespace std;

// Membuat kelas Human
class Human
{
    // deklarasi atribut privat
private:
    string nik;
    string nama;
    string gender;

    // deklarasi method public
public:
    // destruktor
    Human()
    {
    }

    // method untuk mengset atribut nik
    void setNik(string nik)
    {
        this->nik = nik;
    }

    // method untuk mengset atribut nama
    void setNama(string nama)
    {
        this->nama = nama;
    }

    // method untuk mengset atribut gender
    void setGender(string gender)
    {
        this->gender = gender;
    }

    // method untuk mengambil nilai atribut Nik
    string getNik()
    {
        return this->nik;
    }

    // method untuk mengambil nilai atribut nama
    string getNama()
    {
        return this->nama;
    }

    // method untuk mengambil nilai atribut gender
    string getGender()
    {
        return this->gender;
    }

    // destructor
    ~Human()
    {
    }
};