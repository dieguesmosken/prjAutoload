<?php

class Cliente {
    //atributos
    public $id;
    public $nome;

    //metodos
    public function mostrarDados(){
        return ($this->id ." - ". $this->nome);
    }
}

?>