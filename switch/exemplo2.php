<?php 

$numero = 4;
$operação = 2; // 1 dobro; 2 raiz cubica; 3 raiz quadrada

switch ($operação) {

    case 1:
    $resultado = $numero * 2;
    break;
    
    case 2:
    $resultado = $numero ** 3;  
    break;
    
    case 3:
    $resultado = sqrt($numero);
    break;
    
    default:
    echo "Operação Invalida";

}

echo $resultado;


?>