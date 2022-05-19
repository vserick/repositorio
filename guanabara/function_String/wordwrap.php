<?php 

$tx = "Texto grandão para testar a função wordwrap que quebra a linha de um texto grandão igual esse que esta aqui";
$r = wordwrap($tx, 5, "<br>\n", true);
echo $r;

?>