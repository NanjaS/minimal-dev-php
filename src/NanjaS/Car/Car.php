<?php

namespace NanjaS\Car;

class Car
{

    public function __construct(
        protected readonly int $wheels,
        protected string $color = 'white'
    ) {
    }

    public function getWheels(): int
    {
        return $this->wheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getValues(): array
    {
        $values = [
          'wheels' => $this->wheels,
          'color' => $this->getColor(),
        ];
        return $values;
    }


}