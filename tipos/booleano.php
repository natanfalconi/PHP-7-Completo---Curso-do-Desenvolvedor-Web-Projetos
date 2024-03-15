<div class="titulo">
    Tipo Booleano
</div>


<?php

echo true;
echo '<br>';
echo false; // nesse caso, não aparece nada no browser

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);

echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false); // nesse caso vai retorar 1 (verdadeiro), pois é um valor booleano
echo '<br>' . is_bool('false'); // nesse caso não vai retornar nada, pois é uma string (falso)

echo '<p>Regras: </p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000001); // verdadeiro

echo '<br>' . var_dump((bool) '');// false
echo '<br>' . var_dump((bool) "0"); // false

echo '<br>' . var_dump((bool) " "); // a string tendo algo dentro, será verdadeiro, mesmo que seja o espaço
echo '<br>' . var_dump((bool) "00"); // true
echo '<br>' . var_dump((bool) "false"); // true


echo '<br>' . var_dump(!!"false"); //dupla negação --- true