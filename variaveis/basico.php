<div class="titulo">
    Variáveis
</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros, '<br>';

echo isset ($somaDosNumeros);
echo '<br>';

unset($somaDosNumeros); // essa variavel já não está setada
// echo isset ($somaDosNumeros); 
// var_dump($somaDosNumeros); // resultado -- null

$variavel = 'Antes era 10 (int), Agora sou uma string';
echo '<br>' . $variavel;

// nomes de variáveis
// precisa do dolar em php
$var = "valida";
$var2 = "valida";

// pode ser tudo maiuscula com numeros
$VAR3 = 'valida';
$_var_4 = 'valida';

// IDEAL É SER CONSISTENTE NA CRIAÇÃO DAS VARIÁVEIS - SEGUIR UMA MESMA ESTRUTURA - UMA PADRONIZAÇÃO


// é valido, mas não é recomendado esse tipo de variável, com acentuação0
// EVITAR
$vár5 = 'valida';

// NÃO PERMITGE NESSES CASOS
// $6var = 'INVÁLIDA';
// $%VAR7 = 'INVÁLIDA';
// $VAR8% = 'INVÁLIDA';




// VARIÁVEIS PRÉ DEFINIDAS

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);