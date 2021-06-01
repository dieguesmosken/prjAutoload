<?php
namespace App\classes\testes;
class Edicao {
    private $id;
    private $titulo;
    private $nPaginas;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getNPaginas(){
        return $this->nPaginas;
    }
    public function setNPaginas($nPaginas){
        $this->nPaginas = $nPaginas;
    }
}
?>