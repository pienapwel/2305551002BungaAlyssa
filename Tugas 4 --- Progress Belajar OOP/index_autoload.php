<?php
// Autoloading fungsi untuk memuat kelas secara otomatis
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Sekarang kita bisa langsung menggunakan kelas tanpa memanggil require_once
$tomat = new Tomat();
echo $tomat->warna();  // Output: Merah!

$wortel = new Wortel();
echo $wortel->warna();  // Output: Oranye!
?>
