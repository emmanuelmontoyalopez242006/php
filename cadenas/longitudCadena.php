<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Longitud de una cadena en PHP</title>
</head>

<body>
    <?php

    $cadena = "Hola mundo, mi nombre es Emmanuel y estoy estudiando PHP(Hypertext Preprocessor)";
    $cadenaDos = "Hola";
    echo $cadena . " => ";
    echo strlen($cadena);
    ?>
    <br>
    <?php
    echo $cadenaDos . " => ";
    echo strlen($cadenaDos);

    ?>
</body>

</html>