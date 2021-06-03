<?php
namespace App\ufc;

class Luta
{
    public $idLuta, $lutadorA, $lutadorB;

    public function __construct($objlutador1, $objlutador2){
        $this->lutadorA = $objlutador1;
        $this->lutadorB = $objlutador2;
        $this->idLuta = rand(1, 100);
    }
    public function getIdLuta(){
        return $this->idLuta;
    }
    public function PontuarLutadores(){
        $this->lutadorA->setPontos(rand(1, 10));
        $this->lutadorB->setPontos(rand(1, 10));
    }
    public function decretarVitoria(){
        if($this->lutadorA->getPontos() > $this->lutadorB->getPontos()){
            return $this->lutadorA->getNome();
        }else if($this->lutadorA->getPontos() < $this->lutadorB->getPontos()){
            return $this->lutadorB->getNome();
        }else{
            return "Ouve Empate";
        }
    }
    public function getNomeLutadorA(){
        return $this->lutadorA->getNome();
    }
    public function getNomeLutadorB(){
        return $this->lutadorB->getNome();
    }
    public function getPontosLutadorA(){
        return $this->lutadorA->getPontos();
    }
    public function getPontosLutadorB(){
        return $this->lutadorB->getPontos();
    }
}
?>