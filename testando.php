<?php
require_once 'classes/testes/ClasseA.php';
require_once 'classes/testes/ClasseB.php';


echo "<hr>";
$minhaClasseB = new ClasseB();
$minhaClasseB->rg = 123456;
$minhaClasseB->nome = "Matheus mosken diegues";
echo $minhaClasseB->exibirDados();
echo "<br>";

$outraClasseB = new ClasseB();
$outraClasseB->rg = 98765123;
$outraClasseB->nome = "outro nome aqui";
echo $outraClasseB->exibirDados();
echo "<hr>";
echo "<br>";
$minhaClasseA = new ClasseA();
$minhaClasseA->nome = "Classe chuchu";
$minhaClasseA->dependencia = $outraClasseB;
echo $minhaClasseA->exibirNome();
echo "<br>";
echo"<hr> <h1>testando</h1>";

?>