<?php
require 'vendor/autoload.php';

use App\classes\Cliente;
use App\classes\Produto;


//instanciar um objeto
$c1 = new Cliente(rand(1, 10), "Tone Alex Guerra");



$c2 = new Cliente(rand(1, 10), "Matheus Mosken Diegues");


$p1 = new Produto(rand(1, 100), "Mouse", "50 Reais");


echo $c2->id." - ". $c2->getNome();
echo "<br>";
echo $c1->mostrarDados();
echo "<br><br>";
echo $p1->mostrarProduto();

?>