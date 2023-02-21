<!-- Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. -->

<?php

//import kelas
include "Human.php";
include "Mahasiswa.php";
include "SivitasAkademik.php";

echo "<hr>";
echo "<h3>Daftar Mahasiswa Universitas Pendidikan Indonesia Angkatan 2021</h3>";
echo "<hr>";

//instansiasi objek SivitasAkademik dengan default konstruktor
$mhs1 = new SivitasAkademik();

//mengset atribut 
$mhs1->setNik("12345678");
$mhs1->setNim("2109103");
$mhs1->setNama("Riska Nurohmah");
$mhs1->setGender("Famale");
$mhs1->setFakultas("FPMIPA");
$mhs1->setProdi("Ilmu Komputer");
$mhs1->setUniv("UPI");
$mhs1->setEmail("riskanurohmah@upi.edu");

//menampilkan data mahasiswa
echo "<table>";
    echo "<tr><td>1.<td>"."<td>NIK</td><td>:</td><td>".$mhs1-> getNik()."</td></tr>";
    echo "<tr><td><td>"."<td>NIM</td><td>:</td><td>".$mhs1-> getNim()."</td></tr>";
    echo "<tr><td><td>"."<td>Nama</td><td>:</td><td>".$mhs1-> getNama()."</td></tr>";
    echo "<tr><td><td>"."<td>Gender</td><td>:</td><td>".$mhs1-> getGender()."</td></tr>";
    echo "<tr><td><td>"."<td>Fakultas</td><td>:</td><td>".$mhs1-> getFakultas()."</td></tr>";
    echo "<tr><td><td>"."<td>Prodi</td><td>:</td><td>".$mhs1-> getProdi()."</td></tr>";
    echo "<tr><td><td>"."<td>Universitas</td><td>:</td><td>".$mhs1-> getUniv()."</td></tr>";
    echo "<tr><td><td>"."<td>Email</td><td>:</td><td>".$mhs1-> getEmail()."</td></tr>";
    echo "</table>";
    echo "<hr>";

//instansiasi objek SivitasAkademik kedua dengan default konstruktor
$mhs2 = new SivitasAkademik();
$mhs2->setNik("87654321");
$mhs2->setNim("2109102");
$mhs2->setNama("Arfan Juliandri");
$mhs2->setGender("Male");
$mhs2->setFakultas("FPIPS");
$mhs2->setProdi("Geografi");
$mhs2->setUniv("UPI");
$mhs2->setEmail("arfanjuliandri@upi.edu");

//menampilkan data mahasiswa
echo "<table>";
    echo "<tr><td>2.<td>"."<td>NIK</td><td>:</td><td>".$mhs2-> getNik()."</td></tr>";
    echo "<tr><td><td>"."<td>NIM</td><td>:</td><td>".$mhs2-> getNim()."</td></tr>";
    echo "<tr><td><td>"."<td>Nama</td><td>:</td><td>".$mhs2-> getNama()."</td></tr>";
    echo "<tr><td><td>"."<td>Gender</td><td>:</td><td>".$mhs2-> getGender()."</td></tr>";
    echo "<tr><td><td>"."<td>Fakultas</td><td>:</td><td>".$mhs2-> getFakultas()."</td></tr>";
    echo "<tr><td><td>"."<td>Prodi</td><td>:</td><td>".$mhs2-> getProdi()."</td></tr>";
    echo "<tr><td><td>"."<td>Universitas</td><td>:</td><td>".$mhs2-> getUniv()."</td></tr>";
    echo "<tr><td><td>"."<td>Email</td><td>:</td><td>".$mhs2-> getEmail()."</td></tr>";
    echo "</table>";
    echo "<hr>";

?>