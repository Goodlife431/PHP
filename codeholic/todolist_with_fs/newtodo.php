<?php 

// echo '<pre>';
// var_dump($_POST);
// echo '<pre>';

$todoname = $_POST['todo_name'] ?? '';
$todoname = trim($todoname);

if($todoname){
    $json = file_get_contents('todo.json');
    echo $json;
}
?>