<?php
// Contoh Abstraction
abstract class Sayur {
    // Metode abstrak yang harus diimplementasikan di kelas turunan
    abstract public function deskripsi();
}

// Kelas turunan Bayam
class Bayam extends Sayur {
    public function deskripsi() {
        return "Ini adalah bayam yang kaya akan nutrisi dan baik untuk kesehatan.";
    }
}

// Kelas turunan Wortel
class Wortel extends Sayur {
    public function deskripsi() {
        return "Ini adalah wortel yang mengandung banyak vitamin A.";
    }
}

// Membuat objek dari kelas Bayam dan Wortel
$sayur1 = new Bayam();
$sayur2 = new Wortel();

// Mengakses deskripsi sayur
echo "Deskripsi Sayur 1: " . $sayur1->deskripsi() . "<br>"; 
echo "Deskripsi Sayur 2: " . $sayur2->deskripsi() . "<br>";
?>
