<?php 

$json = '[{"nome":"Erick","idade":18},{"nome":"Julia","idade":16}]';

//json_decode -> transforma json em array

$data = json_decode($json, true);

var_dump($data);

?>