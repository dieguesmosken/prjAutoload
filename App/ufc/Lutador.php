<?php
namespace App\ufc;
class Lutador{
    private $id, $nome, $idade, $peso, $altura;
    private $pontos;

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
    public function getNome(){
        return $this->nome;
    }
    public function mostrarLutador(){
        $info = "";
        $info .= "Id ". $this->id. "<br>";
        $info.= "Nome: ". $this->nome. "<br>";
        $info.="Idade: ". $this->idade. "<br>";
        $info.="Peso: ". $this->peso. "<br>";
        $info.="Altura: ". $this->altura. "<br>";
        $info.="Pontos: ". $this->pontos. "<br>";
        
        return $info;
    }
   
}
?>