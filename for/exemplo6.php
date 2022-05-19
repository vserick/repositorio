<form method="POST" enctype="multipart/form-data">

    <label for="n">Numero <a style="color: red">*</a></label>
    <br>
    <input type="number" name="n" required>
    <br><br>
    <button type="submit">ENTER</button>

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $num = $_POST["n"];
    $divisivel = 0;
    $primo = 0;

    for ($cont = 1; $cont <= $num; $cont ++) {
        
        $divisivel = $num % $cont;

        if ($divisivel == 0) {

            $primo ++;

        }

    }

    if ($primo == 2) {

        echo "<h1>O numero $num É um numero primo.</h1>";

    } else {

        echo "<h1>O numero $num NÃO é um numero primo.</h1>";

    }
}

?>