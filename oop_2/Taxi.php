<?php

// ここにコードを書いていきます
require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger;


    public function pickUp($passenger)
    {
        $this->passenger = $this->passenger + $passenger;
        $passenger = strval($passenger);

        return  "{$passenger}人乗車しました\n";
    }
    public function lower($passenger)
    {
        $this->passenger = $this->passenger - $passenger;
        if ($this->passenger  >= 0) {
            $passenger = strval($passenger);
            return  "{$passenger}人降車しました\n";
        }
        return  "{$passenger}人降車できません\n";
    }
    public function information()
    {

        return '車の車種:' . $this->getName() . "\n" .
            '車体番号:' . $this->getNumber() . "\n" .
            'カラー:' . $this->getColor() . "\n" .
            '乗車人数:' . $this->passenger . "人\n";
    }
}
