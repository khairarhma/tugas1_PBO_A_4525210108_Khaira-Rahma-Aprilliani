<?php
class iPhone
{
    // Properties
    public string $color;
    public string $storage;

    // Konstruktor: setiap objek harus memberi nilai pada properties
    public function __construct(string $color, string $storage)
    {
        $this->color = $color;
        $this->storage = $storage;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getStorage(): string
    {
        return $this->storage;
    }
}
