<?php
namespace App\classes\testes;
class Revista{
    public $nome;
    public $autor;
    public $ed;

    public function getNome(){
        return $this->nome;
    }
    public function getAutor(){
        return $this->autor;
    }
    
}

?>