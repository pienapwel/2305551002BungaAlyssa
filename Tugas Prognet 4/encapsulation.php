<?php
class Sayur {
    // Properti
    private $nama; // Hanya bisa diakses dari dalam class
    private $warna; // Hanya bisa diakses dari dalam class
    private $jenis; // Hanya bisa diakses dari dalam class

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
}

// Membuat objek dari kelas Sayur
$bayam = new Sayur();
$wortel = new Sayur();

// Mengatur nilai untuk objek bayam
$bayam->set_nama('Bayam');
$bayam->set_warna('Hijau');
$bayam->set_jenis('Daun');

// Mengatur nilai untuk objek wortel
$wortel->set_nama('Wortel');
$wortel->set_warna('Oranye');
$wortel->set_jenis('Akar');

// Mengakses properti dan metode 
echo "Sayur 1: " . $bayam->get_nama() . "<br>";
echo "Warna: " . $bayam->get_warna() . "<br>";
echo "Jenis: " . $bayam->get_jenis() . "<br>";
echo "<br>"; 

echo "Sayur 2: " . $wortel->get_nama() . "<br>";
echo "Warna: " . $wortel->get_warna() . "<br>";
echo "Jenis: " . $wortel->get_jenis() . "<br>";
?>
