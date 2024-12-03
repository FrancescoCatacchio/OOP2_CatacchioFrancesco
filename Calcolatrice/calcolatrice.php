<?php

require('Calcolatrice/index.php');

class Rettangolo{
    use Calc;

    public $base;
    public $altezza;

    public function __construct($base, $altezza)
    {
        $this->base=$base;
        $this->altezza=$altezza;
    }

    public function getArea(){
        return $this->mul($this->base, $this->altezza);
    }

    public function getPer(){
        $somma= $this->sum($this->base, $this->altezza);
        return $this->mul($somma, 2);
    }

    
    

}

$rett = new Rettangolo(12,15);
echo $rett->getArea() . "\n";

$rett2 = new Rettangolo(5,10);
echo $rett2->getPer() . "\n";
