<?php
// Kelas induk Sayur
class Sayur {
    // Metode yang akan di-override oleh kelas turunan
    public function deskripsi() {
        return "Ini adalah sayur.";
    }
}

// Kelas turunan Bayam
class Bayam extends Sayur {
    // Override metode 'deskripsi' untuk Bayam
    public function deskripsi() {
        return "Ini adalah bayam yang kaya akan nutrisi dan baik untuk kesehatan.";
    }
}

// Kelas turunan Wortel
class Wortel extends Sayur {
    // Override metode 'deskripsi' untuk Wortel
    public function deskripsi() {
        return "Ini adalah wortel yang mengandung banyak vitamin A.";
    }
}

// Menggunakan polimorfisme
$sayur1 = new Bayam();
$sayur2 = new Wortel();

echo "Deskripsi Sayur 1: " . $sayur1->deskripsi() . "<br>"; 
echo "Deskripsi Sayur 2: " . $sayur2->deskripsi() . "<br>";
?>
