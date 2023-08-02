<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="better_calculator.php" method="post">
        number 1: <input type="number" name="num1"> <br>
        OP: <input type="text" name="op"><br>
        number 2: <input type="number" name="num2"> <br>
        <input type="submit">
    </form>

    <?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2;
    }elseif($op == "-"){
        echo $num1 - $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }elseif($op == "/"){
        echo $num1 / $num2;
    }else{
        echo "Invalid operator";
    }
    ?>
</body>
</html>