<?php 
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$connection = require_once './connection.php';

$id = $_POST['id'] ?? '';
if ($id){
    $connection->updateNote($id, $_POST);
}else{
    $connection->addNotes($_POST);
}


header('location: index.php');
?>