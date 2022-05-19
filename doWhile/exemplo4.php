<form method="POST" enctype="multipart/form-data">

<label for="numero">Numero <a style="color: red">*</a></label>
<br>
<input type="number" name="numero" required>
<br><br>
<button type="submit">Tabuada</button>

</form>

<?php 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $n = $_POST["numero"];
        $numero = $n;
        $cont = 1;

        do{

            echo "$numero  X  $cont = " . ($numero * $cont) . "<br>";
            $cont += 1;

        } while ($cont <= 10);
    
    }

    
?>    
