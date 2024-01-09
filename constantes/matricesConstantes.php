<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices constantes en php</title>
</head>

<body>
    // Las constantes son globales
    <?php

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"

    ]);
    print_r(cars);

    define("numero", 8);
    if (true) {
        echo numero;
    }
    ?>
</body>

</html>