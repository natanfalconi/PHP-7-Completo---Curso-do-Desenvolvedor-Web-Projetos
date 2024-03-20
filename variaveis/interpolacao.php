<div class="titulo">Interpolação</div>

<?php

$numero = 10;
echo $numero;
echo "<br>", "Usando interpolacao: " . "$numero"; // interpolação só funciona com aspas duplas, nesse caso, detro da string é possível usar a variavel
echo "<br>";
$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = "Caneta";

echo "<br>Eu tenho 5 {$objeto}s."; // consigo interpolar a variavel com string, dessa forma
echo "<br>Eu tenho 5 {$objeto}s mas perdi 3 {$objeto}s.";