<html>
<body>
<?php
    class Fruit {
        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro() {
            echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
        }
    }
    class Cherry extends fruit{
        public $weight;

        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
       
        public function intro()
        {
            echo "This fruit is {$this->name}, The color is {$this->color} and the weight is {$this->weight} grams.";
        }

    }

    $cherry = new Cherry("Cherry", "bright pink", "20");
    $cherry->intro();
    ?>
</body>
</html>