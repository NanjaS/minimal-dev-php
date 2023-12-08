<?php

//require_once '../src/NanjaS/Car.php';

require_once __DIR__ . '/../src/NanjaS/Car/Car.php';
require_once __DIR__ . '/../src/NanjaS/Car/Pickup.php';

$car = new \NanjaS\Car\Car(4,'red');
var_dump($car->getValues());

echo PHP_EOL;

$pickup = new \NanjaS\Car\Pickup(4);
$pickup->setLoad(2000);
$pickup->setColor('blue');
var_dump($pickup->getValues());