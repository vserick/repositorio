<?php 

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Erick',
    'idade' => 18
));

array_push($pessoas, array(
    'nome' => 'Julia',
    'idade' => 16
));

//json_encode -> transformar array em json

echo json_encode($pessoas);