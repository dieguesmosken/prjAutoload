<?php

namespace App\classes;

class Cliente {
    //atributos
    public $id;
    private $nome;

    //metodos

    //sobreecrita override
    public function __construct($id, $nome){
        $this->id = $id;
        $this->setNome($nome);
    }
    
    public function mostrarDados(){
        return ($this->id ." - ". $this->nome);
    }
    public function setNome($nome){
        $this->nome = strtoupper($nome);
    }
    public function getNome(){
        return $this->nome;
    }
}

?>