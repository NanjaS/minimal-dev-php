<?php

namespace NanjaS\Car;

class Bike extends Vehicle
{
    public function getWheels() : int {
        return $this->wheels;
    }
    public function setColor(string $color) : void {
        $this->color = $color;
    }

    public function setBrand(string $brand) : void {
        $this->brand = $brand;
    }
}

//    public function __construct(
//        public int $wheels,
//        public string $bikeType = 'Sport'
//
//    ){
//
//    }
//    public function getAndSetWheels(int $wheels) : int
//    {
//        $this->wheels = $wheels;
//
//        return $this->wheels;
//    }
//    public $color;
//    public $wheels;
//    public $model;
//    public function __construct($wheels, $color)
//    {
//        $this->wheels = $wheels;
//        $this->color = $color;
//        echo 'Create bike <br />';
//
//    }
//    public function getWheels()
//    {
//        return $this->wheels;
//    }
//$myBike = new Bike(2, 'Red');
//$myBike->model = 'Sport Bike';
//$myBike->color = 'Black';
//echo $myBike->getWheels();
//
//
//$wheels = $myBike->getWheels();
//echo "Number of wheels: $wheels";