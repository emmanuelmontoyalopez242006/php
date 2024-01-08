<?php

if ($_POST) {
    $numeroUno = $_POST["numeroUno"];
    $numeroDos = $_POST["numeroDos"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="numeroUno">Numero 1</label>
        <input type="text" name="numeroUno" id="numeroUno">
        <br>
        <label for="numeroDos">Numero 2</label>
        <input type="text" name="numeroDos" id="numerDos">
        <br>
        <input type="submit" name="" id="">
    </form>
    <div class="container">
    </div>
    <?php
    echo "La suma es " . $numeroUno + $numeroDos;

    ?>
</body>

</html>