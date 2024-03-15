<div class="titulo">
    Desafio String
</div>

<?php


/*

Enunciado
Avaliando os métodos da documentação da string, qual
o método que a posicão do texto 'abc' na string
'!AbcaBcabc' retorne 1?

//'!AbcaBcabc'

*/

print "Avaliando os métodos da documentação da string, qual
o método que a posicão do texto 'abc' na string '!AbcaBcabc' retorne 1?  ";


$texto = "!AbcaBcabc";

echo '<br>', 'O método é o stripos, pois ignora o case sensitive';

echo '<br>', stripos($texto, "abc");