<?php 
require_once './Person.php';
require_once './Student.php';

// $p = new Person('seun',21, null);

// echo $p->name .'<br>';
// echo $p->age .'<br>';
// // echo $p->getSalary() .'<br>';
// $p->setSalary(1000000.00);
// echo $p->getSalary() .'<br>';


$s = new Student('Shola', 15, 31814);

echo $s->name . '<br>';

?>