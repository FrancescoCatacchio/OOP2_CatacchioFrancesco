<?php 

require('Ironman/braccioDestro.php');
require('Ironman/braccioSinistro.php');
require('Ironman/gambe.php');

class Ironman {
    public $attaccoAlto;
    public $attaccoBasso;
    public $saltoMistico;
    public  static $counter = 0;

    public function __construct(BraccioDestro $attaccoAlto, BraccioSinistro $attaccoBasso, Gambe $saltoMistico)
    {
        $this->attaccoAlto=$attaccoAlto;
        $this->attaccoBasso=$attaccoBasso;
        $this->saltoMistico=$saltoMistico;
        self::$counter++;
    }

    public function attaccoAereo(){
        $this->attaccoAlto->attaccoAereo();
    }

    public function attaccoBasso(){
        $this->attaccoBasso->attaccoBasso();
    }

    public function saltoMistico(){
        $this->saltoMistico->saltoMistico();
    }

    public function total(){
        echo "Il totale di iroman sono " .IronMan::$counter;
    }  
}





$combatti= new Ironman(new Razzo, new Pugno, new Salto);
$combatti2=new Ironman(new Razzo, new Pugno, new Salto);
print_r($combatti);
$combatti->attaccoAereo();
$combatti->attaccoBasso();
$combatti->saltoMistico();
$combatti->total();




