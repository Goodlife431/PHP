<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" name="post">
        What was your grade?
        <input type="text" name="grade"> <br>
        <input type="submit">
    </form>

    <?php 
    $grade = $_POST["grade"];
    switch($grade){
        case "A":
            echo "You did amazing";
            break;
        case "B":
            echo "You did pretty Good";
            break;
        case "C":
            echo "You did poorly";
            break;
        case "D":
            echo "You did very badly";
            break;
        case "F":
            echo "You Failed";
            break;
        default: 
            echo "Invalid input";
    }
    ?>
</body>
</html>