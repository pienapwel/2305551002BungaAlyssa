<?php
// Kelas induk Sayur
class Sayur {
    // Properti protected hanya bisa diakses di kelas ini dan kelas turunannya
    protected $nama;
    protected $warna;
    protected $jenis;

    // Metode untuk mengatur nilai nama
    protected function set_nama($nama) {
        $this->nama = $nama; 
    }

    // Metode untuk mengatur nilai warna
    protected function set_warna($warna) {
        $this->warna = $warna;
    }

    // Metode untuk mengatur nilai jenis
    protected function set_jenis($jenis) {
        $this->jenis = $jenis; 
    }

    // Metode untuk menggambarkan sayur
    public function deskripsi() {
        return "Sayur: {$this->nama}, Warna: {$this->warna}, Jenis: {$this->jenis}.";
    }
}

// Kelas anak Bayam yang mewarisi Sayur
class Bayam extends Sayur {
    // Metode untuk mengatur properti khusus Bayam
    public function setProperties() {
        $this->set_nama('Bayam');
        $this->set_warna('Hijau');
        $this->set_jenis('Daun');
    }
}

// Kelas anak Wortel yang mewarisi Sayur
class Wortel extends Sayur {
    // Metode untuk mengatur properti khusus Wortel
    public function setProperties() {
        $this->set_nama('Wortel');
        $this->set_warna('Oranye');
        $this->set_jenis('Akar');
    }
}

// Membuat objek dari kelas Bayam dan Wortel
$bayam = new Bayam();
$bayam->setProperties(); // Set properti untuk Bayam

$wortel = new Wortel();
$wortel->setProperties(); // Set properti untuk Wortel

// Mengakses deskripsi sayur
echo $bayam->deskripsi() . "<br>";
echo $wortel->deskripsi() . "<br>";
?>
