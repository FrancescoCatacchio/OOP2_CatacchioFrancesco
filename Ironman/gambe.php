<?php

abstract class Gambe{
    abstract public function saltoMistico();
}

class Salto extends Gambe{
    public function SaltoMistico(){
        echo "Ti salto casa in due secondi \n";
    }
}