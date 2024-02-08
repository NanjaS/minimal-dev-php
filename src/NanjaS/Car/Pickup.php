<?php

namespace NanjaS\Car;

use NanjaS\Car\Vehicle;

class Pickup extends Vehicle
{
    private int $load = 1000;

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
}