<?php 

// ERRO DE LOOP INFINITO

for ($i=0; $i < 10; $i--) { // Nesse caso o programa sera executado infinitamente pois a variavel $i ira diminuir de 1 em 1 e nunca 
                            // chegara a 10
  
    echo $i . " ";

}

?>