<div class="titulo">
    Conversões
</div>


<?php

echo is_int(PHP_INT_MAX), '<br>';

// int para float
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3); // conversão explicita


echo '<br>';

// float para int
echo '<p>Float para int </p>';

var_dump((int) 2.8); // nesse caso, haverá perda de informação. Resultado será 2
echo '<br>';

var_dump(intval(2.8, 10)); // ou, outro exemplo
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.8));
echo '<br>';

// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); // nesse caso, o resultado será 5
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2); // nesse caso será 32. o Ponto (.) é a concatenação
echo '<br>', is_string("3" . 2);
// echo '<br>', is_string("3" + 2);
echo '<br>';
var_dump(1 + "cinco"); // ele ignora a segunda parte
echo '<br>';
var_dump(1 + "5 cinco"); // ele faz a soma pegando a parte inicial
echo '<br>';
var_dump(1 + "cinco 5"); //não será feito a soma, sendo 1 o resultado
echo '<br>';
var_dump(1 + "2+5"); // ideal seja fuzir desse cenário, ele soma apenas 1 + 2 e ignora o restante
echo '<br>';
var_dump(1 + "3.2"); // nesse caso ele sabe que é um valor numérico
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");

