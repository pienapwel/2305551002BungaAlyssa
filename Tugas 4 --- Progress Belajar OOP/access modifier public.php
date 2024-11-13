<?php
// Kelas induk Sayur
class Sayur {
    // Properti public
    public $nama; 
    public $warna; 
    public $jenis; 

    // Metode public untuk menggambarkan sayur
    public function deskripsi() {
        return "Sayur: {$this->nama}, Warna: {$this->warna}, Jenis: {$this->jenis}.";
    }
}

// Membuat objek dari kelas Sayur
$bayam = new Sayur();
$wortel = new Sayur();

// Mengatur nilai properti
$bayam->nama = 'Bayam';
$bayam->warna = 'Hijau';
$bayam->jenis = 'Daun';

$wortel->nama = 'Wortel';
$wortel->warna = 'Oranye';
$wortel->jenis = 'Akar';

// Mengakses properti public dan metode public
echo "Nama Sayur 1: " . $bayam->nama . "<br>"; 
echo "Warna Sayur 1: " . $bayam->warna . "<br>"; 
echo "Deskripsi Sayur 1: " . $bayam->deskripsi() . "<br>"; 

echo "Nama Sayur 2: " . $wortel->nama . "<br>";
echo "Warna Sayur 2: " . $wortel->warna . "<br>";
echo "Deskripsi Sayur 2: " . $wortel->deskripsi() . "<br>"; 
?>
