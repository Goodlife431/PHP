<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="post">
        <input type="text" name="students"> <br>
        <input type="submit">
    </form>

    <?php 
    $grades = array("Jim" => "A+", "Kemi" => "A+", "Shola" => "C+", "Bimbo" => "B+");
    echo $grades[$_POST["students"]];
    ?>
</body>
</html>