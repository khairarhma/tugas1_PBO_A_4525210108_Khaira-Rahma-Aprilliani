<?php
require_once 'Pemain.php';

class Tim
{
    private string $namaTim;
    /** @var Pemain[] */
    private array $daftarPemain;

    // AGREGASI: objek Pemain dibuat di luar lalu dimasukkan ke Tim
    // (Pemain tetap ada walaupun Tim dihapus)
    public function __construct(string $namaTim, array $daftarPemain)
    {
        $this->namaTim = $namaTim;
        $this->daftarPemain = $daftarPemain;
    }

    public function tampilkanPemain(): void
    {
        echo "Tim " . $this->namaTim . " memiliki pemain:\n";
        foreach ($this->daftarPemain as $pemain) {
            echo "- " . $pemain->getNama() . "\n";
        }
    }
}
