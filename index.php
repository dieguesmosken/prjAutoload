<?php
require_once 'classes/Cliente.php';
require_once 'classes/Produto.php';


//instanciar um objeto
$c1 = new Cliente(rand(1, 10), "Tone Alex Guerra");



$c2 = new Cliente(rand(1, 10), "Matheus Mosken Diegues");


$p1 = new Produto(rand(1, 100), "Mouse", "50 Reais");


echo $c2->mostrarDados();
echo "<br>";
echo $c1->mostrarDados();
echo "<br><br>";
echo $p1->mostrarProduto();

?>