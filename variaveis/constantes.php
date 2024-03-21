<div class="titulo">Constantes</div>

<?php

// se utiliza o define para constantes
define("TAXA_DE_JUROS", 5.9);
echo TAXA_DE_JUROS;


// OU CONST 
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;


// PARA ATRIBUIR UM VALOR A CONSTANTE, EXISTE UMA LIMITAÇÃO, SENDO POSSÍVEL APENAS COM DEFINE
$valorVariavel = 2.8;
define("NOVISSIMA_TAXA", $valorVariavel);


// outros tipos de constantes
echo '<br>' . NOVISSIMA_TAXA;

echo "<br>" . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br>' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
