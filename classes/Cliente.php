<?php

class Cliente {
    //atributos
    public $id;
    private $nome;

    //metodos
    public function mostrarDados(){
        return ($this->id ." - ". $this->nome);
    }
    public function setNome($nome){
        $this->nome = strtoupper($nome);
    }
}

?>