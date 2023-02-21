<!-- Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. -->


<?php
//Membuat kelas Human
class Human {

//deklarasi atribut private
private $nik;
private $nama;
private $gender;

//konstruktor
function __construct() {

}

//method untuk mengset nik
function setNik($nik) {
$this->nik = $nik;
}

//method untuk mengset nama
function setNama($nama) {
$this->nama = $nama;
}

//method untuk mengset gender
function setGender($gender) {
$this->gender = $gender;
}

//method untuk mengambil nilai atribut nik
function getNik() {
return $this->nik;
}

//method untuk mengambil nilai atribut nama
function getNama() {
return $this->nama;
}

//method untuk mengambil nilai atribut gender
function getGender() {
return $this->gender;
}

//destruktor
function __destruct() {
}
}

?>