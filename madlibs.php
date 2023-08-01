<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="madlibs.php" method="get">
        color: <br>
        <input type="text" name="color">
        Plural Noun: <br>
        <input type="text" name="PluralNoun">
        Celebrity: <br>
        <input type="text" name="celebrity">
    </form>

    <?php
    $color = $_GET["color"];
    $PluralNoun = $_GET["PluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color <br> ";
    echo "$PluralNoun are blue <br>";
    echo "I love $celebrity <br>";
    ?>
</body>
</html>