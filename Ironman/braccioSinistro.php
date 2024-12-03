<?php

abstract class BraccioSinistro{
    abstract public function attaccoBasso();
}

class Pugno extends BraccioSinistro{
    public function attaccoBasso(){
        echo "Ti colpisco dritto in faccia \n";
    }
}