<div class="titulo">
    Tipo String
</div>

<?php

echo 'Eu sou uma string'; // com aspas simples
echo '<br>';
var_dump('Eu também');
echo '<br>';


// concatenação
// usamos o ponto (.)

echo ("Nós também " . " somos");
echo '<br>', "Numero é " . 123;
echo '<br>', "Também aceito", " virgulas";

echo "<br>";
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" ";

// alternatica do echo

print ('<br>Também existe a função print');


// algumas funções da string


echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Eu também', "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', "aquilo", 'Trocar isso'); // trocar um pelo outro, no caso a palavra isso










?>