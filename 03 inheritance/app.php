<?php
require_once 'BangunDatar.php';
require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

$bd = new BangunDatar();
$bd->luas();
$bd->keliling();

// objek lingkaran
$lk = new Lingkaran(15);
echo "Luas lingkaran: " . round($lk->luas(), 2) . "\n";
echo "keliling lingkaran: " . round($lk->keliling(), 2) . "\n";

// objek persegi
$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . $pj->luas() . "\n";
echo "keliling Bujur Sangkar: " . $pj->keliling() . "\n";

// objek segitiga
$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . $sg->luas() . "\n";

// Segitiga tidak mendefinisikan keliling(), jadi yang terpanggil
// adalah keliling() milik parent class BangunDatar
$sg->keliling();
