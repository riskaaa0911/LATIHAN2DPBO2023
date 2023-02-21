<!-- Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. -->
<?php

//Membuat kelas Mahasiswa yang merupakan anak dari kelas Human
class Mahasiswa extends Human{

//deklarasi atribut privat
private $nim;
private $fakultas;
private $prodi;

//konstruktor
function __construct() {

}

//method untuk mengset nim
function setNim($nim) {
$this->nim = $nim;
}

//method untuk mengset fakultas
function setFakultas($fakultas) {
$this->fakultas = $fakultas;
}

//method untuk mengset prodi
function setProdi($prodi) {
$this->prodi = $prodi;
}

//method untuk mengambil nilai atribut nim
function getNim() {
return $this->nim;
}

//method untuk mengambil nilai atribut fakultas
function getFakultas() {
return $this->fakultas;
}

//method untuk mengambil nilai atribut prodi
function getProdi() {
return $this->prodi;
}

//destruktor
function __destruct() {

}

}
?>