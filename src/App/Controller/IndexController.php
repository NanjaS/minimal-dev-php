<?php

namespace App\Controller;

class IndexController
{
    public function index()
    {
        $pickup = new \NanjaS\Car\Pickup(4);
        $pickup->setLoad(2000);
        $pickup->setColor('blue');
        var_dump($pickup->getValues());
    }
}