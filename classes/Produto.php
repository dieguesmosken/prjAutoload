<?php
//criar a estrutura da classe
//criar os atributos id, produto, valor
//criar o metodo mostrarProduto
//git remote add origin https://github.com/dieguesmosken/prjAutoload.git
//git remote

//enviar ao github --> git push origin master

class Produto{

public $id;
public $produto;
public $valor;

public function mostrarProduto(){
    return ($this->id ." - ". $this->produto." - ". $this->valor );
}
}
?>