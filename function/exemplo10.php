<form method="POST" enctype="multipart/form-data">

    <label for="n1">Numero 1 <a style="color: red">*</a></label>
    <br>
    <input type="number" name="n1" required>
    <br><br>
    <button type="submit">Send</button>

</form>

<?php

include "funcoes.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $n1 = $_POST["n1"];
    
    echo "O numero $n1 é um numero " . parOuImpar($n1);

    

}

?>