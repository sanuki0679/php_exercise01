<?php

// ここにコードを書いていきます
require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    public $passenger;
    public $passon;
    public $passoff;
    public function __construct($car_name, $car_number, $car_color, $passenger, $passon, $passoff)
    {
        parent::__construct($car_name, $car_number, $car_color);
        $this->passenger = $passenger;
        $this->passon = $passon;
        $this->passon = $passoff;
    }

    public function pickUp($passon)
    {
        $this->passon = strval($passon);

        return  "{$this->passon}人乗車しました\n";
    }
    public function lower($passoff)
    {
        if (($this->passenger - $this->passoff) >= 0) {
            $this->passoff = strval($passoff);
            return  "{$this->passoff}人降車しました\n";
        }
        return  "{$this->passoff}人降車できません\n";
    }

    public function number1()
    {
        $this->passenger = $this->passenger + $this->passon;

        return '乗車人数:' . $this->passenger . "人\n";
    }
    public function number2()
    {
        $this->passenger = $this->passenger - $this->passoff;
        return '乗車人数:' . $this->passenger . "人\n";
    }
}
