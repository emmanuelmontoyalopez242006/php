<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>

<body>
    <?php
    // and
    if ((2 == 2) and (3 == 3) and (4 == 5)) {
        echo "Igual";
    }
    // or
    if ((2 == 2) or (3 == 3)) {
        echo "Igual";
    }
    // xor
    if ((2 == 2) xor (3 == 3)) {
        echo "Igual";
    }
    // &&
    if ((2 == 2) && (3 == 3)) {
        echo "Igual";
    }
    // ||
    if ((2 == 2) || (3 == 3)) {
        echo "Igual";
    }
    // !
    $x = 10;
    if (!($x == 90)) {
        echo "Hello world!";
    }

    ?>
</body>

</html>