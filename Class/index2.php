<?php

require_once('./Class/class.php');

class Post{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($titolo,Category $categoria,$tag)
    {
        $this->titolo=$titolo;
        $this->categoria=$categoria;
        $this->tag=$tag;

    }
    public function titolo(){
      return $this->titolo;
        
    }
    public function categoria(){
      $this->categoria->getmycategory();
    }
    public function tag(){
        return $this->tag;
    }
    
}

$post1 = new Post("Titolo post1 " , new Attualita() , "tag1,tag2" );
$post1->categoria();
var_dump($post1);


