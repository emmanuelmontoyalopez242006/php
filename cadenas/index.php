<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos en php</title>
</head>

<body>
    <?php

    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " y es marca " . $this->model . "";
        }
    }

    $myCar = new Car("red", "volvo");
    print_r($myCar);
    print_r($myCar->message());



    ?>
</body>

</html>