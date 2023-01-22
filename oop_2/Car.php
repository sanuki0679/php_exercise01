<?php

class Car
{

    private $car_name;
    private $car_number;
    private $car_color;


    public function __construct($car_name, $car_number, $car_color)
    {
        $this->car_name = $car_name;
        $this->car_number = $car_number;
        $this->car_color = $car_color;
    }

    public function getName()
    {
        return $this->car_name;
    }
    public function getNumber()
    {
        return $this->car_number;
    }
    public function getColor()
    {
        return $this->car_color;
    }


    public function setName($car_name)
    {
        $this->car_name = $car_name;
    }

    public function setNumber($car_number)
    {
        $this->car_number = $car_number;
    }

    public function setColor($car_color)
    {
        $this->car_color = $car_color;
    }

    public function information()
    {
        return '車の車種:' . $this->car_name . "\n" .
            '車体番号:' . $this->car_number . "\n" .
            'カラー:' . $this->car_color . "\n";
    }
}
