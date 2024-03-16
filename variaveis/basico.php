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
var_dump($somaDosNumeros); // resultado -- null