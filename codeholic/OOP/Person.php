<?php 

class Person {
    public String $name;
    public int $age;
    private ?float $salary;

    public function __construct($name, $age, $salary)
    {
     $this->name = $name;
     $this->age  = $age;
     $this->salary = $salary; 
    }

    public function getSalary()
    {
      return $this->salary;  
    }

    public function setSalary($salary)
    {
     return $this->salary = $salary;   
    }

}










?>