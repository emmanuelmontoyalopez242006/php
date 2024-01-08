<?php

if ($_POST) {
    $numero = $_POST["numero"];
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
    <form action="post.php" method="post">
        <label for="numero">Numero</label>
        <input type="text" name="numero" id="numero">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <h1>
        <?php echo $numero; ?>
    </h1>
</body>

</html>