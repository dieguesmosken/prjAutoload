<?php
namespace App\ufc;
class Lutador{
    private $id, $nome, $idade, $peso, $altura,$pontos;

    public function __construct($id, $nome, $idade, $peso, $altura){
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        
    }
    public function setPontos($pontos){
        $this->pontos = $pontos;
    }
    public function getPontos(){
        return $this->pontos;
    }
    public function mostrarLutador(){
        $info = "Id ". $this->id. "<br>"
        . "Nome: ". $this->nome. "<br>"
        ."Idade: ". $this->idade. "<br>"
        ."Peso: ". $this->peso. "<br>"
        ."Altura: ". $this->altura. "<br>"
        ."Pontos: ". $this->pontos. "<br>";
        
        return $this->$info;
    }
}
?>