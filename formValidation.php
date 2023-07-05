<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Name: <input type="Text" name="name">
    Email: <input type="text" name="name">
    Website <input type="text" name="name">
    Comment <input type="Text" name="name">

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="others">Others

    <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">

    <?php
    $name = $email = $gender = $comments = $website = "";
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["name"]);
        $gender = test_input($_POST["name"]);
        $comments = test_input($_POST["name"]);
        $gender = test_input($_POST["name"]);

    } 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</body>
</html>