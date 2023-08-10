<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // print current date stamp
    //echo time(). '<br>';
    //print current date 
    echo date('Y-m-d H:i:s'). '<br>';
    //$dateString = "Feburary 4 2020 12:45:35";//with non default format 

    $date = "4.8.2023 15:30+01:00";
    print_r(date_parse_from_format(""))
    ?>
</body>
</html>