<?php
class Lutador{
    private $id, $nome, $idade, $peso, $altura;

    public function __construct($id, $nome, $idade, $peso, $altura){
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function mostrarLutador(){
        $info = "ID: ". $this->id. "<br>";
        $info = "Nome: ". $this->nome. "<br>";
        $info = "Idade: ". $this->idade. "<br>";
        $info = "Peso: ". $this->peso. "<br>";
        $info = "Altura: ". $this->altura. "<br>";
        
        return $this->$info;
    }
}
?>