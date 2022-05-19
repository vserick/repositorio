
<form method="POST" enctype="multipart/form-data">

<label for="fatorial">Numero <a style="color: red">*</a></label>
<br>
<input type="number" name="fatorial" required>
<br><br>
<button type="submit">Fatorial</button>

</form>

<?php 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $fat = $_POST["fatorial"];
        $cont = $fat;
        $fatorial = 1;
        
        do {

            $fatorial = $fatorial * $cont;
            $cont--;

        } while ($cont >= 1);
    
        echo "O fatorial de " . $fat . " é: " . $fatorial;

    }

?>