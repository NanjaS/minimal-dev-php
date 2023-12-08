<?php

namespace NanjaS\Car;

use NanjaS\Car\Car;

class Pickup extends Car
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