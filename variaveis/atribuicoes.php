<div class="titulo">Atribuições</div>

<?php

$title = "Atribuições"; // nesse caso, o  "=" serve para atribuir

$numero = 10;

echo "<br>" . $numero;
$numero = $numero - 3; // como parte da expressão, a propria variavel pode fazer parte dela
echo "<br>" . $numero;
$numero = $numero + 1.5; // nesse caso, o resultado passa a ser um float
echo "<br>" . $numero;
$numero--; // operador unário  | notação pós fixada
--$numero; // notação pré fixada
echo "<br>" . $numero;
$numero++;
++$numero;
echo "<br>" . $numero;
$numero = 20;
echo "<br>" . $numero;
$numero -= 5; // atribuição subtrativa | não precisa ficar no 1
echo "<br>" . $numero;
$numero += 5; // atribuição aditiva
echo "<br>" . $numero;
$numero *= 10; // atribuição multiplicativa
echo "<br>" . $numero;
$numero /= 2; // atribuição divisiva
echo "<br>" . $numero;
$numero %= 6; // modulo
echo "<br>" . $numero;
$numero **= 4; // potencia
echo "<br>" . $numero;
$numero .= 4; // estou apenas concatenando 4 | ficar atento a isso
echo "<br>" . $numero;

$texto = "Esse é um texto";
echo "<br>" . $texto;
$texto = $texto . " qualquer";
echo "<br>" . $texto;
$texto .= " de verdade";
echo "<br>" . $texto;


// valor padrão, quando uma variavel não está presente

// $variavelInexistente = "Valor Existente ";
echo "<br>" . $variavelInexistente;
$valor = $variavelInexistente ?? 'Valor default';
echo "<br>" . $valor;