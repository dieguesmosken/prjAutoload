<?php
namespace App\classes;

class Venda {
    public $obCli;
    public $obProd;
    public $qtd;
    public $total;

    public function calculaTotal(){
        $this->total = $qtd * $obProd->valor;
    }
}
?>