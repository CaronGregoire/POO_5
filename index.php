<?php

require_once 'Car.php';
require_once 'Bike.php';
require_once 'LightableInterface.php';
require_once 'Vehicle.php';

$twingo = new Car('yellow', 10, "fuel");

echo $twingo->switchOn();

$btwin = new Bike('red', 1);

$btwin->setCurrentSpeed(5);
echo $btwin->switchOn();
$btwin->setCurrentSpeed(10);
echo $btwin->switchOn();