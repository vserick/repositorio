<?php 

for ($i = 0; $i < 1000; $i+=5) { //  $i = 0 significa que a variavel $i inicia com 0 - $i < 10 significa que enquanto a variavel $i for 
                                //  for menor que 10 ele continuara exebindo o echo - $i++ significa que esta sendo acrescentado 1 no for
                               // cada vez que ele é analisado.  

    if ($i >= 200 && $i <= 800) continue; // "continue" significa que ele pulara os casos entre parenteses

    if ($i === 900) break; // "break"  significa que ele parara no caso entre parenteses e continuara o codigo
                               
    echo $i . "<br>";

}

?> 