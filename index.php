<?php
require_once 'classes/Cliente.php';

//instanciar um objeto
$c1 = new Cliente();

$c1->id = 10;
$c1->nome = "Tone Alex Guerra";

$c2 = new Cliente();

$c2->id = 11;
$c2->nome = "Matheus Mosken Diegues";

echo $c2->mostrarDados();
echo "<br>";
echo $c1->mostrarDados();
?>