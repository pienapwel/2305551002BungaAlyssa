<?php
class Sayur {
    public $nama = "Sayur"; // Properti public yang dapat diakses dari luar kelas

    public function deskripsi() {
        return "Ini adalah {$this->nama}."; // Menggunakan properti dalam metode
    }
}

// Membuat objek dari kelas Sayur
$sayur = new Sayur();

// Mengakses properti dan metode
echo $sayur->nama; // Bisa diakses, output: Sayur
echo "<br>";
echo $sayur->deskripsi(); // Bisa diakses, output: Ini adalah Sayur.
?>
