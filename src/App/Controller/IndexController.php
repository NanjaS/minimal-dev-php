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

    public function showBike() {
        //neue Objekt erstellen mit den Pfad zu Bike.php
        $bike = new \NanjaS\Car\Bike(2, 'black', 'Kawasaki');
        $bike->setWheels(2);
        $bike->setColor('black');
        $bike->setBrand('Kawasaki');
//        $bike->setWheels(2);
//        $bike->setColor('black');

    }
}