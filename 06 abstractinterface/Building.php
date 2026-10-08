<?php
require_once 'Vehicle.php';

// Tidak implement Movable maupun Fuelable
// sehingga tidak punya move() dan refuel()
class Building extends Vehicle
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}
