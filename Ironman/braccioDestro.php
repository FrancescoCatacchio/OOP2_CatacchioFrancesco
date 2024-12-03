<?php

abstract class BraccioDestro{
    abstract public function attaccoAereo();
}

class Razzo extends BraccioDestro{
    public function attaccoAereo(){
        echo "Bombardo dall'alto \n";
    }
}