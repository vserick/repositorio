<?php 

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; // -> "&&" indica que tanto a operação antes dele, quanto a depois, tem que ser
                                              // verdadeiras para dar resultado verdadeiro. (se uma só for falsa, o resultado sera falso)


var_dump ($resultado);

echo "<br>";

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; // -> "||" indica que se uma só operação ja for verdadeira ele trara resultado verdadeiro
                                             // Só trara resultado falso caso todas as operações antes e depois dele sejam falsa.

var_dump($resultado);

?>