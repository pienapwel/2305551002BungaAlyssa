<?php
// Menyertakan file yang berisi kelas Tomat dan Wortel
require_once 'Tomat.php';
require_once 'Wortel.php';

// Membuat objek dari kelas Tomat dan Wortel, kemudian memanggil metode warna
$tomat = new Tomat();
echo $tomat->warna();  // Output: Merah!

$wortel = new Wortel();
echo $wortel->warna();  // Output: Oranye!
?>
