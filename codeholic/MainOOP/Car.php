<?php 

class Car{

    private $color  = 'green';
    public $weight;
    private $year;
    private $available = ['red', 'white', 'blue', 'yellow'];

    public function setYear($year) {
 
        $this->$year = $year;   
       }
    public function getYear(){
        return $this->year;
    }
    public function setColor($color){
        if (in_array($color, $this->available)) {
            $this->color = $color;
        }
    }
    public function getColor(){
        return $this->color;
    }
}

$myCar = new Car();
$myCar->setYear('2020');
$myCar->setColor('white');

echo $myCar->getColor();
echo $myCar->getYear();





?>
