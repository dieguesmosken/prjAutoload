<?php
require_once "classes/testes/Edicao.php";
require_once "classes/testes/Revista.php";


$objED = new Edicao();
$objED->setID(rand(1,1000));
$objED->setTitulo("Aprendendo Orientação a Objetos");
$objED->setNPaginas(rand(1,100));

$objRevist = new Revista();
$objRevist->nome = "Revista Linux";
$objRevist->autor = "Desconhecido";
$objRevist->ed = $objED;


echo $objRevist->getNome();
echo "<br>";
echo $objRevist->getAutor();
echo "<br>";
echo $objRevist->ed->getID();
echo "<br>";
echo $objRevist->ed->getTitulo();
echo "<br>";
echo $objRevist->ed->getNPaginas();
?>