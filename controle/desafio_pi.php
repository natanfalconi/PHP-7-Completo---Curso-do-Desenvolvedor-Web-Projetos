<div class="titulo">Desafio PI</div>

<?php

//desafio pi
echo pi();
$pi = 3.14;

if (pi() === $pi) {
    echo "<br>Iguais";
} else {
    echo "<br> Diferentes";
}

//resposta
$piErrado = 2.8;
echo "<br>" . ($pi - pi());
echo "<br>" . ($pi - $piErrado);

if ($pi - pi() <= 0.01) {
    echo "<br> Praticamente Iguais";
}

if ($pi - $piErrado <= 0.01) {
    echo "<br> Praticamente Iguais";
} else {
    echo "<br> Valor err ado";
}