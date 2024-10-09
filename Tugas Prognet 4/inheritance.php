<?php
// Kelas induk Sayur
class Sayur {
    protected $nama; // Properti yang dapat diakses oleh kelas turunan
    protected $warna;
    protected $jenis;

    // Metode untuk mengatur nilai nama
    public function set_nama($nama) {
        $this->nama = $nama; 
    }

    public function get_nama() {
        return $this->nama; 
    }

    // Metode untuk mengatur nilai warna
    public function set_warna($warna) {
        $this->warna = $warna;
    }

    public function get_warna() {
        return $this->warna;
    }

    // Metode untuk mengatur nilai jenis
    public function set_jenis($jenis) {
        $this->jenis = $jenis; 
    }

    public function get_jenis() {
        return $this->jenis; 
    }

    // Metode untuk menggambarkan sayur
    public function deskripsi() {
        return "Sayur: {$this->nama}, Warna: {$this->warna}, Jenis: {$this->jenis}.";
    }
}

// Kelas anak Bayam yang mewarisi Sayur
class Bayam extends Sayur {
    // Metode untuk menggambarkan sayur bayam
    public function deskripsi() {
        $this->set_nama('Bayam');
        $this->set_warna('Hijau');
        $this->set_jenis('Daun');
        return parent::deskripsi();
    }
}

// Kelas anak Wortel yang mewarisi Sayur
class Wortel extends Sayur {
    // Metode untuk menggambarkan sayur wortel
    public function deskripsi() {
        $this->set_nama('Wortel');
        $this->set_warna('Oranye');
        $this->set_jenis('Akar');
        return parent::deskripsi();
    }
}

// Membuat objek dari kelas Bayam dan Wortel
$bayam = new Bayam();
$wortel = new Wortel();

// Mengakses deskripsi sayur
echo $bayam->deskripsi() . "<br>";
echo $wortel->deskripsi() . "<br>";
?>
