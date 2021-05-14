<?php
require_once 'classes/Cliente.php';
require_once 'classes/Produto.php';


//instanciar um objeto
$c1 = new Cliente();

$c1->id = 10;
$c1->nome = "Tone Alex Guerra";

$c2 = new Cliente();

$c2->id = 11;
$c2->nome = "Matheus Mosken Diegues";

$p1 = new Produto();
$p1->id = 4;
$p1->produto = "Mouse";
$p1->valor = "50 Reais";

echo $c2->mostrarDados();
echo "<br>";
echo $c1->mostrarDados();
echo "<br><br>";
echo $p1->mostrarProduto();

?>