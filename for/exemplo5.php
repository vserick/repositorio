<form method="POST" enctype="multipart/form-data">

    <label for="n">Numero <a style="color: red">*</a></label>
    <br>
    <input type="number" name="n" required>
    <br><br>
    <button type="submit">Tabuada</button>

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $num = $_POST["n"];
    $tab = $num;

    for ($cont = 1; $cont <= 10; $cont++) {

        $tab = $num * $cont;
        echo "$num X $cont = $tab" . "<br>";   

    }

}

?>