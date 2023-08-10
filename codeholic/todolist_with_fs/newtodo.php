<?php 

// echo '<pre>';
// var_dump($_POST);
// echo '<pre>';

$todoname = $_POST['todolist'] ?? '';
$todoname = trim($todoname);

if($todoname){
    if(file_exists('todo.json')){
    $json = file_get_contents('todo.json');
    $jsonarray = json_decode($json, true);
    }else {
        $jsonarray = [];
    }
    $jsonarray[$todoname] = ['completed' => false];echo $json;
    
    var_dump($jsonarray);

    file_put_contents('todo.json', json_encode($jsonarray, JSON_PRETTY_PRINT));
}

header('location: index.php')
?>