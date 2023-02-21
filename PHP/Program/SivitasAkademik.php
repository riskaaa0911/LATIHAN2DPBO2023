<!-- Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. -->

<?php
//Membuat kelas SivitasAkademik yang merupakan anak dari kelas Mahasiswa 
//dan cucu dari kelas Human
class SivitasAkademik extends Mahasiswa {

//deklarasi atribut private
private $asal_univ;
private $email;

//konstruktor
function __construct() {

}

//method untuk mengset atribut asal_univ
function setUniv($asal_univ) {
$this->asal_univ = $asal_univ;
}

//method untuk mengset atribut email
function setEmail($email) {
$this->email = $email;
}

//method untuk mengambil nilai atribut asal_univ
function getUniv() {
return $this->asal_univ;
}

//method untuk mengambil nilai atribut email
function getEmail() {
return $this->email;
}

//destruktor
function __destruct()
{
    
}

}

?>