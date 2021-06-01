<?php 
namespace App\classes\testes;
class ClasseB {
    
    public $rg;
    public $nome;

    public function exibirDados(){
        return ($this->rg . ' - '.$this->nome);
    }
}

?>