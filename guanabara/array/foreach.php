<?php 

$pessoa = array( "nome" => "Erick",
                "idade" => 18,
                "peso" => 51.5 
);

$pessoa["fuma"] = false;

foreach ($pessoa as $key => $value) {
    
    echo "O campo $key possui o valor $value <br>";

}

?>