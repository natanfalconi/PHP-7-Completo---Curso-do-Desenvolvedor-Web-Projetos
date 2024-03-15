<div class="titulo">
    Operações Aritméticas
</div>

<?php

echo 1 + 1, '<br>';
var_dump(1 + 1);
var_dump(1 + 1.0); // tipo float
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // nesse caso o resultado será um inteiro - ele tira as casas decimais --- Não arredonda
echo round(7 / 4), '<br>'; // nesse caso, ele arredonda o valor

echo 7 % 4, '<br>'; // Esse é o operador "modulo" - também chamado de resto da divisão

// podemos desobrir se o numero é par ou impar -- se o resto da divisão foi 1, o numero e IMPAR
// se for 0, o numero é par

echo 7 % 2, '<br>'; // impar 
echo 8 % 2, '<br>'; // par

// echo 7 / 0, '<br>'; // divisão por 0 no php vai sempre tender ao infinito

// nesse caso, vai dar erro, e caso tenha itens abaixo, ele nao carrega
// echo intdiv(7, 0), '<br>'; 

echo 4 ** 2, '<br>'; // essa é a forma de exponenciação

// precedencia de operadores

echo '<p>Precedência</p>';

echo 2 + 3 * 4, '<br>'; // primiro multiplicação
echo (2 + 3) * 4, '<br>'; // primiro parenteses
echo 2 + 3 * 4 ** 2, '<br>'; // primiro exponenciação, multiplicação e depois soma
echo ((2 + 3) * 4) ** 2, '<br>'; // primiro parenteses, depois exponenciação


?>