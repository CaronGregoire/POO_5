<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        if ($this->currentSpeed < 10) {
            return "Go faster !";
        } return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}