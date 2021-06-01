<?php
require "vendor/autoload.php";



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
echo "<hr>";
$java = new Revista();
$java->nome = "revista tone";
$java->autor = "tone";
$java->ed = new Edicao();
$java->ed->setID(rand(1, 1000));
$java->ed->setTitulo("Aprendendo Java");
$java->ed->setNPaginas(rand(1, 1000));
echo "<hr>";
echo "<h1>Debug  </h1>";
//debug

echo "<pre>";
print_r($java->ed);
echo "</pre>";


?>