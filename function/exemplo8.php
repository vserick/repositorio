<?php 

// int... indica que os valores que os valores que estão na variavel $valores serão inteiros
// :string indica que os valores retornarão em forma de string
function soma(int ...$valores):string {

    // array_sum -> vai fazer a soma dos valores que estão no array
    return array_sum($valores);

}
echo "Quebra de linha";
echo "<br>";
var_dump(soma(2, 3));
echo "<br>";    
var_dump(soma(4, 25));
echo "<br>";    
var_dump(soma(2.5, 3.2));
echo "<br>";    

?> 