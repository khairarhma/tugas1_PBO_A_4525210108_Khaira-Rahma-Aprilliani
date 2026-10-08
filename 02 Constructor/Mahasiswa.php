<?php
// Kelas Mahasiswa dengan constructor (pengganti overloading), setter, dan getter
class Mahasiswa
{
    private string $nama;
    private string $nim;
    private int $umur;

    // PHP tidak punya constructor overloading, jadi pakai parameter default.
    // new Mahasiswa()                  -> semua default
    // new Mahasiswa("Budi", "123")     -> umur default 0
    // new Mahasiswa("Siti", "123", 22) -> lengkap
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int $umur = 0
    ) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    public function getNama(): string { return $this->nama; }
    public function setNama(string $nama): void { $this->nama = $nama; }

    public function getNim(): string { return $this->nim; }
    public function setNim(string $nim): void { $this->nim = $nim; }

    public function getUmur(): int { return $this->umur; }
    public function setUmur(int $umur): void { $this->umur = $umur; }

    public function tampilkanInfo(): void
    {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Umur: " . $this->umur . "\n";
    }
}
