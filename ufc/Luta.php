<?php
class Luta{
    public $idLuta, $lutadorA, $lutadorB;

    public function __construct($lutadorA, $lutadorB){
        $this->lutadorA = $lutadorA;
        $this->lutadorB = $lutadorB;
        $this->id = rand(1, 100);
    }
    public function getIdLuta(){
        return $this->idLuta;
    }
}
?>