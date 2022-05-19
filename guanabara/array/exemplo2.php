<?php 

$c = array( 0 => 1,
            8 => 3,
            10 => 4,
            4 => 2
);
// comando unset desaloca determinado array da memoria (nesse caso a posição 8)
unset($c [8]);

print_r($c);

?>