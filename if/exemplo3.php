<?php 

$n1 = 6.5;
$n2 = 4.0;

echo "Sua nota final foi: " . $media = ($n1 + $n2) / 2;

echo "<br>";

if ($media >= 7) {

    echo "Aprovado !!";

} else if ($media >= 6) {

    echo "Recuperação !!";

} else {

    echo "Reprovado";

}

?>