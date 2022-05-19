<?php 

$inicio = rand(0, 200);

echo "Numero incial: " . $inicio;

echo "<br>";

$fim = rand(1, 200);

echo "Numero final: " . $fim;

echo "<br>";

$incremento = rand(1, 10);

echo "incremento: " . $incremento;

echo "<br>";

if ($fim > $inicio) {

    while ($inicio <= $fim) {

        echo $inicio . "<br>";
        $inicio += $incremento;

    }

} else {

    while ($inicio >= $fim) {

        echo $inicio . "<br>";
        $inicio -= $incremento;

    }

}

?>