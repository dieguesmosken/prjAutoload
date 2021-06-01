<?php 
echo "<h1>Loteria Random</h1>";

echo "<hr>";
echo "<h2>Numeros sorteados</h2>";
echo "<br>";
$numero1 = rand(1, 60);
$numero2 = rand(1, 60);
$numero3 = rand(1, 60);
$numero4 = rand(1, 60);
$numero5 = rand(1, 60);
$numero6 = rand(1, 60);


echo $numero1. " - ".$numero2. " - ".$numero3. " - ".$numero4. " - ".$numero5. " - ".$numero6;

echo "<hr>";
?>

<!--<input type="button" value="Voltar" onClick="history.go(-1)"> -->
<!--<input type="button" value="Avançar" onCLick="history.forward()"> -->
<input type="button" value="Atualizar" onClick="history.go(0)"> 


