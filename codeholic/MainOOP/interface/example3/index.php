<?php 

require_once 'penguin.php';
require_once 'duck.php';
require_once 'bird.php';

$bird = new Birds();
$bird->fly();

$penguin = new Penguin();
$penguin->swim();


$duck = new Duck();
$duck->fly();
$duck->swim();

?>