<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $ismale = false;
    $isTall = true;

    if($ismale && $isTall){
        echo "You are a tall male";
    }elseif($ismale && !$isTall){
        echo "You are a short male";
    }elseif(!$ismale && $isTall){
        echo "You are not a male but you are tall";
    }else{
        echo "You are not a male and you are not tall";
    }
    ?>
</body>
</html>