<?php

namespace App\Controller;
use NanjaS\Car\Bike;

class IndexController
{
    public function index()
    {
        $pickup = new \NanjaS\Car\Pickup(4);
        $pickup->setLoad(2000);
        $pickup->setColor('blue');
        var_dump($pickup->getValues());
    }

    public function showBike(string $color): Bike {
        //neue Objekt erstellen mit den Pfad zu Bike.php
        $bike = new Bike(2);
        $bike->setColor($color);
        return $bike;
    }
}