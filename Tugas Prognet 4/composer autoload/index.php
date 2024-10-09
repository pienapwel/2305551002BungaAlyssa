<?php
// Memuat autoload file dari Composer
require_once __DIR__ . '/vendor/autoload.php';

use Sayur\Tomat;
use Sayur\Wortel;

// Membuat objek dan memanggil metode
$tomat = new Tomat();
echo $tomat->warna();  // Output: Merah!

$wortel = new Wortel();
echo $wortel->warna();  // Output: Oranye!
?>
