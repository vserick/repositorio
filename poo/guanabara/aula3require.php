<?php 

require_once "aula3.php";

$c1 = new Caneta;
$c1->modelo = "Bic Cristal";
$c1->cor = "Azul";
//$c1->ponta = 0.5;
//$c1->carga = 90;

$c1->rabiscar();
$c1->tampar();
print_r($c1);
$c1->rabiscar();




?>