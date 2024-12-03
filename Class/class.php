<?php

abstract class Category{
    abstract public function getmycategory();
}

class Attualita extends Category{
    public function getmycategory()
    {
        echo "questa e' l'attualita \n'";
    }
}

class Sport extends Category{
    public function getmycategory()
    {
        echo "questo e' lo sport \n'";
    }
}

class Gossip extends Category{
    public function getmycategory()
    {
        echo "questo e' il Gossip \n'";
    }
}

class Storia extends Category{
    public function getmycategory()
    {
        echo "questa e' la Storia \n'";
    }
}

class ShowCategory {
    public $attualita;
    public $sport;
    public $gossip;
    public $storia;

    public function __construct(Attualita $attualita, Sport $sport, Gossip $gossip, Storia $storia)
    {
        $this->attualita=$attualita;
        $this->sport=$sport;
        $this->gossip=$gossip;
        $this->storia=$storia;

    }
    public function getmycategory(){
        $this->attualita->getmycategory();
        $this->sport->getmycategory();
        $this->gossip->getmycategory();
        $this->storia->getmycategory();
    }
}



$showAll= new ShowCategory(new Attualita , new Sport , new Gossip , new Storia);
// print_r($showAll);
// $showAll->getmycategory();
