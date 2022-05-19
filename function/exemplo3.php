<?php 

function ola($texto = "Mundo", $periodo = "Bom Dia !" ) {

    return "Ola $texto ! $periodo <br>";

}

echo ola();
echo ola("Mundo", "");
echo ola("Julia", "Boa Tarde !");
echo ola("Erick");
echo ola("", "");

?>