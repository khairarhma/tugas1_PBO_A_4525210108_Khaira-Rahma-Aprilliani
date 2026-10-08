<?php
// PHP tidak punya "default method" di interface seperti Java.
// Penggantinya adalah TRAIT: berisi implementasi bawaan refuel()
// yang bisa dipakai class mana pun (dan boleh di-override).
trait FuelableDefault
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum.\n";
    }
}
