<?php 
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$connection = require_once './connection.php';

$connection->addNotes($_POST);

header('location: index.php');
?>