<?php 

// int... indica que os valores que os valores que estão na variavel $valores serão inteiros
function soma(int ...$valores) {

    // array_sum -> vai fazer a soma dos valores que estão no array
    return array_sum($valores);

}
echo "Quebra de linha";
echo "<br>";
echo soma(2, 3);
echo "<br>";    
echo soma(4, 25);
echo "<br>";    
echo soma(2.5, 3.2);
echo "<br>";    

?> 