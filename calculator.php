<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <br>
        <input type="submit" >
    </form>
    <?php $_GET ["num1"] + $_GET ["num2"] ?>
</body>
</html>