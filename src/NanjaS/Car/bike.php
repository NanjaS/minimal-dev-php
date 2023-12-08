<?php

namespace NanjaS\Car;

class Bike
{
    public $color;
    public $wheels;
    public $model;
    public function __construct($wheels, $color)
    {
        $this->wheels = $wheels;
        $this->color = $color;
        echo 'Create bike <br />';

    }
    public function getWheels()
    {
        return $this->wheels;
    }
}
$myBike = new Bike(2, 'Red');
$myBike->model = 'Sport Bike';
$myBike->color = 'Black';
echo $myBike->getWheels();


$wheels = $myBike->getWheels();
echo "Number of wheels: $wheels";