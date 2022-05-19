<?php 

// mostrara o TimeStump da data selecionada
// a data precisa estar na ordem ano/mes/dia
$ts = strtotime("2003-09-05");
$ts2 = strtotime("+20 day, -12 hours");

echo date("l, d/M/Y", $ts);

echo "<br>";

echo date("l, d/M/Y H:i:s", $ts2)
?>