<?php
namespace App\ufc;
class Luta{
    public $idLuta, $lutadorA, $lutadorB;

    public function __construct($lutadorA, $lutadorB){
        $this->lutadorA = $lutadorA;
        $this->lutadorB = $lutadorB;
        $this->idLuta = rand(1, 100);
    }
    public function getIdLuta(){
        return $this->idLuta;
    }
    public function pontuarLutadores(){

    }
    public function decretarVitoria(){
        
    }
}
?>