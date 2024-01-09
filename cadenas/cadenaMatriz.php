<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De cadena a Matriz</title>
</head>

<body>
    <?php
    $texto = "Hola mundo me llamo Emmanuel";
    $array = explode(" ", $texto);
    print_r($array);
    ?>
</body>

</html>