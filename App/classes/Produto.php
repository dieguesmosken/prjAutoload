<?php
//criar a estrutura da classe
//criar os atributos id, produto, valor
//criar o metodo mostrarProduto
//git remote add origin https://github.com/dieguesmosken/prjAutoload.git
//git remote
namespace App\classes;
//enviar ao github --> git push origin master

class Produto{
//converter para privado os atributos
//criar set para cada atributo
//sobrescrever o metodo construttor
private $id;
private $produto;
private $valor;

public function __construct($id, $produto, $valor ){
    $this->setId($id);
    $this->setProduto($produto);
    $this->setValor($valor);
}

public function mostrarProduto(){
    return ($this->id ." - ". $this->produto." - ". $this->valor );
}
public function setId($id){
    $this->id = $id;
}
public function setProduto($produto){
    $this->produto = $produto;
}
public function setValor($valor){
    $this->valor = $valor;
}
}
?>