<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Boat extends Vehicle implements Movable, Fuelable
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function move(): void
    {
        echo $this->name . " bergerak di air.\n";
    }

    // Override refuel
    public function refuel(): void
    {
        echo $this->name . " mengisi bahan bakar solar khusus kapal.\n";
    }
}
