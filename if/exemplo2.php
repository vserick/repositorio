<?php 

$anoNascimento = 2012;
$idade = date("Y") - $anoNascimento;

echo "Você tem " . $idade . " anos";

echo "<br>";

if ($idade >= 18 && $idade <= 65) {

    echo "O voto é OBRIGATÓRIO!!";

} else if ($idade < 16) {

    echo "O voto é PROIBIDO!!";

} else {

    echo "O voto é OPCIONAL";

} 

?>