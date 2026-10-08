<?php
require_once 'Mahasiswa.php';

// Constructor tanpa parameter
$soja = new Mahasiswa();
$soja->tampilkanInfo();

// memberikan value ke property nama lewat setter
$soja->setNama("Soja Purnamasari");
echo "Nama : " . $soja->getNama() . "\n";

$soja->setNim("4523210104");
echo "NIM : " . $soja->getNim() . "\n";

$soja->setUmur(15);
echo "Umur : " . $soja->getUmur() . "\n";

// Constructor lengkap
$nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
$nenden->tampilkanInfo();
