<?php
require_once 'Mahasiswa.php';

// Subclass yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa
{
    private string $negaraAsal;

    // Satu constructor dengan parameter default menggantikan 3 constructor Java.
    // Gunakan named argument (PHP 8+) untuk melewati parameter tertentu:
    //   new MahasiswaInternational("Sarah", "INT67890", negaraAsal: "Australia")
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int $umur = 0,
        string $negaraAsal = "Belum Diisi"
    ) {
        parent::__construct($nama, $nim, $umur); // panggil constructor parent
        $this->negaraAsal = $negaraAsal;
    }

    public function getNegaraAsal(): string { return $this->negaraAsal; }
    public function setNegaraAsal(string $negaraAsal): void { $this->negaraAsal = $negaraAsal; }

    // Override tampilkanInfo untuk menambah informasi
    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo(); // panggil method dari parent
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}
