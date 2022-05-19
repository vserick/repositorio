
<form method="POST" enctype="multipart/form-data">

    <label for="n1">Numero 1 <a style="color: red">*</a></label>
    <br>
    <input type="number" name="n1" required>
    <br><br>
    <label for="n2">Numero 2 <a style="color: red">*</a></label>
    <br>
    <input type="number" name="n2" required>
    <br><br>
    <button type="submit">Send</button>

</form>

<?php 
/*
* formulario com encio de 2 numeros 
* apos envio apresntar na tela:
* a soma dos numeros e a diminuição
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    echo "<br>" . $n3;

    echo "<br> A soma entre " . $n1 . " e " . $n2 . " é: " . ($n1 + $n2);

}

?>

