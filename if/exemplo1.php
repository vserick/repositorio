<?php 

$suaIdade = 70;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($suaIdade < $idadeCrianca) {

    echo "Criança";

} else if ($suaIdade < $idadeMaior) {

    echo "Adolescente";

} else if ($suaIdade < $idadeIdoso) {

    echo "Adulto";

} else {

    echo "Idoso";

}

echo "<br>";

/* === Operador Ternario(if em uma linha só) ===
 se $suaIdade for menor que $idadeMaior; echo "Menor de Idade"
 senão                                 ; echo "Maior de Idade" */                                                         

 echo ($suaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

echo "<br>";

$seuSalario = 15000.00;
$salarioMinimo = 1200.00;
$salarioAlto = 3999.99;
$salarioAstronomico = 10000.00;

if ($seuSalario < $salarioMinimo) {

    echo "Salario Baixo";

} else if ($seuSalario < $salarioAlto) {

    echo "Salario Bom";

} else if ($seuSalario < $salarioAstronomico) {

    echo "Salario Alto";

} else {

    echo "Salario Astronomico";

}

?>