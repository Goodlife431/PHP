<?php 

abstract class Shape {
    protected $color;

    public function __construct($color){
        $this->color = $color;
    }

    public abstract function getArea(): float;

    public function getColor(){
        return $this->color;
    }
}

class Triangle extends Shape {

    public $base;
    public $height;

    public function __construct($color, $base, $height){

        parent::__construct($color);
        $this->base = $base;
        $this->height = $height;
    }
    public function getArea(): float{

        return 0.5 * $this->base * $this->height;

    } 
        
    
}

class Circle extends Shape{
    public $radius;

    public function __construct($color, $radius){
        
        parent::__construct($color);
        $this->radius = $radius;
    }
    
    public function getArea(): float{
        return $this->radius * $this->radius * 3.14;
    }
}

class Rectangle extends Shape {

    public $length;
    public $width;

    public function __construct($color, $width, $length){

        parent::__construct($color);
        $this->width = $width;
        $this->length = $length;
    }

    public function getArea(): float {

        return $this->length * $this->width;
    }

}

$t = new Triangle('red', '5','2');
$c = new Circle('red', '20',);
$r = new Rectangle('red', '10','2');

echo $t->getArea().PHP_EOL;
echo $c->getArea().PHP_EOL;
echo $r->getArea().PHP_EOL;

?>
