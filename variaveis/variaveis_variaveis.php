<div class="titulo">Variáveis Variáveis</div>

<?php

$a = "valorA";
$$a = "ValorAA";

echo "$a {$$a} $valorA";

echo "<br>";
$epa = "opa";
$opa = "vish";
$vish = "eita!!";

echo "$epa {$$epa} {$$$epa}";