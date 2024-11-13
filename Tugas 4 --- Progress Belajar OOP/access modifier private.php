<?php
// Kelas induk Sayur
class Sayur {
    // Properti private
    private $nama; 
    private $warna; 
    private $jenis; 

    // Metode untuk mengatur nilai nama
    public function set_nama($nama) {
        $this->nama = $nama; 
    }

    // Metode untuk mengambil nilai nama
    public function get_nama() {
        return $this->nama; 
    }

    // Metode untuk mengatur nilai warna
    public function set_warna($warna) {
        $this->warna = $warna;
    }

    // Metode untuk mengambil nilai warna
    public function get_warna() {
        return $this->warna;
    }

    // Metode untuk mengatur nilai jenis
    public function set_jenis($jenis) {
        $this->jenis = $jenis; 
    }

    // Metode untuk mengambil nilai jenis
    public function get_jenis() {
        return $this->jenis; 
    }

    // Metode untuk menggambarkan sayur
    public function deskripsi() {
        return "Sayur: {$this->nama}, Warna: {$this->warna}, Jenis: {$this->jenis}.";
    }
}

// Membuat objek dari kelas Sayur
$bayam = new Sayur();
$wortel = new Sayur();

// Mengatur nilai properti melalui setter
$bayam->set_nama('Bayam');
$bayam->set_warna('Hijau');
$bayam->set_jenis('Daun');

$wortel->set_nama('Wortel');
$wortel->set_warna('Oranye');
$wortel->set_jenis('Akar');

// Mengakses deskripsi sayur melalui metode getter dan deskripsi
echo "Nama Sayur 1: " . $bayam->get_nama() . "<br>"; 
echo "Warna Sayur 1: " . $bayam->get_warna() . "<br>"; 
echo "Deskripsi Sayur 1: " . $bayam->deskripsi() . "<br>"; 

echo "Nama Sayur 2: " . $wortel->get_nama() . "<br>";
echo "Warna Sayur 2: " . $wortel->get_warna() . "<br>";
echo "Deskripsi Sayur 2: " . $wortel->deskripsi() . "<br>";
?>
