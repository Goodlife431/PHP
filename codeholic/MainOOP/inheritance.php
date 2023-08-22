<?php 

// class Parent_class{
//     public $property_one = 1;
//     protected $property_two = 2;
//     private $property_three = 3;

//     public function getPropertyl_two(){

//         return $this->property_two;
//     }

// }

// class child_class extends Parent_class {
//     public $property_one = 11;
//     public $property_two = 55;
// }
// $obj = new child_class();
// // echo $obj->property_one;

// echo '<pre>';
// echo $obj->getPropertyl_two();
// echo '</pre>';

class Person {
    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone){

        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello(){
        echo "Hello I am learning oop in php";
    }

    public function getAge(){
        return $this->age;
    }
}

class Employee extends Person{
    private $salary;

    public function __construct($name, $age, $phone, $salary){

        parent::__construct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "I am an employee: $this->name";
    }
}


$employee = new Employee("John", 21 ,"08123940220", 2000);


echo $employee->hello().PHP_EOL;


class Student{
    
}


?>