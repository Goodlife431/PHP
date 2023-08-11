<?php 

require_once('./Person.php');

$p = new Person('seun',21, 800000.00);

echo $p->name .'<br>';
echo $p->age .'<br>';
// echo $p->getSalary() .'<br>';
$p->setSalary(1000000.00);
echo $p->getSalary() .'<br>';


?>