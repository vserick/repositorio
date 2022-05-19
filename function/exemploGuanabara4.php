<?php 

function salario() {

    $val = func_get_args();
    $tot = func_num_args();
    $s = 0;

    for ($cont = 0; $cont < $tot; $cont++) {

        $s += $val[$cont];

    }

    return $s / $tot;

}

$total = salario(8.9, 7.0, 8.99, 5.50);

echo "A media dos valores é $total";

?>