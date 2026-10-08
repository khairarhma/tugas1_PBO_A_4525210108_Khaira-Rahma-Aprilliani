<?php
require_once 'Handphone.php';
require_once 'Smartphone.php';
require_once 'FeaturePhone.php';

// Array berisi objek Handphone (Smartphone & FeaturePhone)
$daftarHandphone = [
    new Smartphone("Samsung", "Galaxy S21"),
    new FeaturePhone("Nokia", "3310"),
];

// Pemanggilan method secara polimorfik
foreach ($daftarHandphone as $hp) {
    $hp->nyalakan();
    $hp->telepon("08123456789");
    $hp->matikan();
    echo "\n";
}

// Mengakses method khusus (tidak perlu casting di PHP)
foreach ($daftarHandphone as $hp) {
    if ($hp instanceof Smartphone) {
        $hp->aksesInternet();
    } elseif ($hp instanceof FeaturePhone) {
        $hp->mainGameSnake();
    }
}
