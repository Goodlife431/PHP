<?php 

class Person {
    public String $name;
    public int $age;
    private float $salary;

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

$p = new Person('seun',21, 800000.00);

echo $p->name .'<br>';
echo $p->age .'<br>';
// echo $p->getSalary() .'<br>';
$p->setSalary(1000000.00);
echo $p->getSalary() .'<br>';









?>