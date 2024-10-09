<?php
class Sayur {
  // Properti
  public $nama;
  public $warna;
  public $jenis;

  // Metode
  function set_nama($nama) {
    $this->nama = $nama; 
  }

  function get_nama() {
    return $this->nama; 
  }

  function set_warna($warna) {
    $this->warna = $warna;
  }

  function get_warna() {
    return $this->warna;
  }

  function set_jenis($jenis) {
    $this->jenis = $jenis; 
  }

  function get_jenis() {
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
echo "<br>"; // Baris kosong setelah sayur 1

echo "Sayur 2: " . $wortel->get_nama() . "<br>";
echo "Warna: " . $wortel->get_warna() . "<br>";
echo "Jenis: " . $wortel->get_jenis() . "<br>";
?>
