<?php 

$vetor = array( 0 => 3,
                1 => 7,
                2 => 2,
                3 => 8,
                4 => 5
);

print_r($vetor);

// esse comando faz com que os elementos do array fiquem em orem (2, 3, 5, 7, 8 nesse caso)
sort($vetor);

print_r($vetor);

// comando reverso do sort
rsort($vetor);

print_r($vetor);

?>