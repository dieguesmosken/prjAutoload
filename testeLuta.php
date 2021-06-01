<?php
require 'vendor/autoload.php';
use App\ufc\Luta;
use App\ufc\Lutador;


$objlutador1 = new Lutador(1, "Cabeça de martelo", 79, 135, 1.45,rand(1, 100));
$objlutador2 = new Lutador(2, "Spider", 32, 87, 1.70,rand(1, 100));

$objLuta = new Luta($objlutador1, $objlutador2);

?>
<h1>Arena UFC</h1>
<hr>
<h2>UFC EVENTO: <?= $objLuta->getIdLuta() ?></h2>
<div>
<h4>Lutador 1</h4>
<?php

print_r($objlutador1->mostrarLutador());

?>
</div>
<div>
<h4>Lutador 2</h4>
<?php

echo $objlutador2->mostrarLutador();

?>

</div>