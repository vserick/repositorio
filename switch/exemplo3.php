<form method="POST" enctype="multipart/form-data">

    <label for="dia">Dia <a style="color: red">*</a></label>
    <br>
    <input type="number" name="dia" required>

    <button type="submit">Send</button>

</form>

<?php

$notdiasemana = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $dia = $_POST["dia"];

    if (!empty(trim($dia))) {

        switch ($dia) {

            case "1":
            case "2":
            case "3":    
            case "4":
            case "5":
            $diaSemana = " um dia util";     
            $estudar = true; 
            break; 
            
            case "6": 
            case "7":
            $diaSemana = "fim de semana";       
            $estudar = false;
            break;

            default:      
            $notdiasemana = true;
            break;
        }

        if(!$notdiasemana) {
            
            if ($estudar) {

                echo "<br>Hoje é " . $diaSemana . ", você estuda";

            } else {

                echo "<br>Hoje é " . $diaSemana . ", você não estuda";

            }

        } else {

            echo "<br>Não é dia da semana";

        }

    }
         
}  
?>