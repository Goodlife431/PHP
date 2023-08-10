<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //create function to sum all numbers ...$numbers
    function sum(...$numbers){
        $total = 0;
       foreach($numbers as $num) $total += $num;
       return $total;
    }
    $sum = sum(2,5,10,15,20);
    echo $sum . "<br>";
    ?>
</body>
</html>