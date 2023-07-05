<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // class Car {
    //     public $color;
    //     public $model;
    //     public function __construct($color, $model){
    //         $this->color = $color;
    //         $this->model = $model;
    //     }
    //     public function message() {
    //         return "My car is a ". $this->color . " " . $this->model . "!";
            
    //     }  
    // }
    // $myCar = new Car("black", "volvo");
    // echo $myCar -> message();
    // echo "<br>";
    // $myCar = new Car("red", "Toyota");
    // echo $myCar ->message();
    define("cars", ["BMW", "benz", "camry"]);
    echo cars[0]
    ?>
</body>
</html>