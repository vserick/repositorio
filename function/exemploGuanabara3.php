<?php 

function soma() {

    $valores = func_get_args();
    var_dump($valores);
    
    echo "<br>";

    $tot = func_num_args();
    var_dump($tot);

    $s = 0;

    for($cont = 0; $cont < $tot; $cont++) {

        $s+= $valores[$cont];     

    }
    
    return $s;

}

$r = soma(1, 2, 3, 3);

echo "<br> A soma dos valores é $r";

?>