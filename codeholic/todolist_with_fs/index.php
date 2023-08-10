<?php 
$todos = [];
if(file_exists('todo.json')){
    $json = file_get_contents('todo.json');
    $todos = json_decode($json);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newtodo.php" method="post">
        <input type="text" name="todolist" placeholder="enter your todo">
        <button>New todo</button>
    </form>

<?php 
foreach($todos as $todoName => $todo); ?>
    <div>
        <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?> >
        <?php echo $todoName?>
        <button>delete</button>
    </div>

<?php T_ENDFOREACH; ?>
</body>
</html>

