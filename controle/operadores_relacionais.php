<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false ---  o sinal de "<>" é outra forma de escrever o diferente

var_dump(111 === "111"); // true
var_dump(111 === "111"); // false - é comparado se é igual e do mesmo tipo
var_dump(111 !== "111"); // false
var_dump(111 != "111"); // true


echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 66;

if ($idade < 18) {
    echo "Menor de idade = $idade anos";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos";
} else {
    echo "Terceira Idade = $idade anos";
}

echo "<p class='divisao'>Spaceship</p><hr>";
// muito usado quando é feito uma comparação entre numeros
var_dump(5 <=> 3); // retorna 1 
var_dump(5 <=> 5); // retorna 0 
var_dump(5 <=> 50); // retorna -1


echo "<p class='divisao'>Valores pode ser V ou F com dupla negação</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" s");
