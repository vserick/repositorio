<?php 

require_once "exercicioAula2.php";

$mp = new MousePad;
$mp->cor = "Preto";
$mp->led = "Vermelho";
$mp->tamanho = 20;
$mp->ligado = false;

$mp->desligar();

print_r($mp);

?>