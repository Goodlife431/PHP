<?php 
// echo '<pre>';
// var_dump($_POST);
// echo '<pre>';

$json = file_get_contents('todo.json');
$jsonarray = json_decode($json, true);

$todoName = $_POST['todo_name'];
if(isset($jsonarray[$todoName])){
$jsonarray[$todoName]['completed'] = !$jsonarray[$todoName]['completed'];
file_put_contents('todo.json', json_encode($jsonarray, JSON_PRETTY_PRINT));
echo 'todo status updated successfully';
}else {
    echo 'Todo not found in Jsonarray';
}
header('location: index.php');
?>