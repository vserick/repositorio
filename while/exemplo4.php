
<form method="POST" enctype="multipart/form-data">

<label for="numInicial">Numero Inicial <a style="color: red">*</a></label>
<br>
<input type="number" name="numInicial" required>
<br><br>
<label for="numFinal">Numero Final <a style="color: red">*</a></label>
<br>
<input type="number" name="numFinal" required>
<br><br>
<button type="submit">Send</button>

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $numInicial = $_POST["numInicial"];
    $numFinal = $_POST["numFinal"];


    if ($numFinal > $numInicial) {

        while ($numInicial <= $numFinal) {

            echo $numInicial . "<br>";
            $numInicial ++;

        }

    } else {

        while ($numInicial >= $numFinal) {

            echo $numInicial . "<br>";
            $numInicial --;

        }

    }


}    



?>