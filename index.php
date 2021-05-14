<?php
require_once 'classes/Cliente.php';
require_once 'classes/Produto.php';


//instanciar um objeto
$c1 = new Cliente();

$c1->id = rand(1, 10);
$c1->setNome("Tone Alex Guerra");

$c2 = new Cliente();

$c2->id = rand(1, 10);
$c2->setNome("Matheus Mosken Diegues");

$p1 = new Produto();
$p1->id = rand(1, 100);
$p1->produto = "Mouse";
$p1->valor = "50 Reais";

echo $c2->mostrarDados();
echo "<br>";
echo $c1->mostrarDados();
echo "<br><br>";
echo $p1->mostrarProduto();

?>