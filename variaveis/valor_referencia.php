<div class="titulo">Valor vs Referência</div>

<?php

echo "<p>Atribuição por valor</p>";

$variavel = "Valor Inicial";
echo $variavel;

// atribuição por valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = "novo valor";
echo "<br> $variavel";
echo " $variavelValor";



// atribuição por referencia
echo "<p>Atribuição por Referência</p>";

$variavelReferencia = &$variavel;
$variavelReferencia = "Mesma referencia, outro valor";
echo "$variavel <br>";
echo "$variavelReferencia";


