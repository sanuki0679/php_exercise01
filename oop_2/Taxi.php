<?php

// ここにコードを書いていきます
require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    public $passenger;
    public $passon;
    public $passoff;
    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
    }
    
    public function pickUp($passon)
    {
        $this->passenger = $this->passenger + $this->passon;
        $this->passon = strval($passon);

        return  "{$this->passon}人乗車しました\n";
    }
    public function lower($passoff)
    {
        $this->passenger = $this->passenger - $this->passoff;
        if (($this->passenger - $this->passoff) >= 0) {
            $this->passoff = strval($passoff);
            return  "{$this->passoff}人降車しました\n";
        }
        return  "{$this->passoff}人降車できません\n";
    }
    public function information()
    {
       
        return '車の車種:' . $this->getName() . "\n" .
            '車体番号:' . $this->getNumber() . "\n" .
            'カラー:' . $this->getColor() . "\n" .
            '乗車人数:' . $this->passenger . "人\n" ;
    }
}
