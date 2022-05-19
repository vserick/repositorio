<?php 

// ARRAY BIDIMENCIONAL

$carros[0][0] = "Chevrolet";
$carros[0][1] = "Vectra"; 
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fusion"; 
$carros[1][2] = "Eco Sport";
$carros[1][3] = "Fiesta";

echo $carros[0][3]; // -> vai mostrar o carro na posição [0][3] no caso o Camaro

echo "<br>";

echo end($carros[1]); // -> vai mostrar o ultimo carro da posição [1] no caso o ultimo carro Ford que é Fiesta

?>