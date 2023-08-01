<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="name">
        Name: <input type="text" name="username">
        <br/>
        Age: <input type="number" name="age">
        <input type="sumbit"> 
    </form>
    <br/>
    Your name is <?php echo $_GET["Username"] ?>
    <br>
    Your age is <?php echo $_GET["age"] ?>
</body>
</html>