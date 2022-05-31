<?php 

require_once "aula2.php";

$c1 = new Caneta;
$c1->cor = "Azul";
$c1->ponta = 0.5;
$c1->tampada = true;

$c1->destampar();
$c1->Rabiscar();

$c2 = new Caneta;
$c2->cor = "Verde";
$c2->ponta = 1.0;
$c2->tampada = true;
$c2->modelo = "Bic";
$c2->carga = 70;

print_r($c1);

echo "<br>";

print_r($c2);

?>