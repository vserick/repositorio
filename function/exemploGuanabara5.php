<?php 

function soma(&$x) {

    $x += 2;
    echo "<p>O valor de X é $x</p>";

}

$a = 2;

soma($a);

echo "<p>O valor de A é $a</p>";

?>