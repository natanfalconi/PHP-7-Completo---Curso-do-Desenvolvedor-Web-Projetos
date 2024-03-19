<div class="titulo">Desafio Equação</div>

<?php


$numeradorA = (6 * (3 + 2)) ** 2;
$demoninadorA = 3 * 2;
$valor1 = $numeradorA / $demoninadorA;


$numeradorB = ((1 - 5) * (2 - 7));
$demoninadorB = 2;
$valor2 = ($numeradorB / $demoninadorB) ** 2;


$demoninadorC = 10 ** 3;

$resultado = ($valor1 - $valor2) ** 3 / $demoninadorC;

echo "o resultado final é: $resultado.";