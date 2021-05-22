<?php
require_once "ufc/Luta.php";
require_once "ufc/Lutador.php";


$objlutador1 = new Lutador(1, "Cabeça de martelo", 79, 135, 1.45);
$objlutador2 = new Lutador(2, "Spider", 32, 87, 1.70);

$objLuta = new Luta($objlutador1, $objlutador2);

?>
<h1>Arena UFC</h1>
<hr>
<h2>UFC EVENTO: <?= $objLuta->getIdLuta() ?></h2>
<div>
<?php
echo "<pre>";
print_r($objlutador1->mostrarLutador());
echo "</pre>";
?>
</div>
<div>
<?php
echo "<pre>";
print_r($objlutador2->mostrarLutador());
echo "</pre>";
?>
</div>