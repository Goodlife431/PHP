<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    #loops 
    #for each 

    // $fruits = ["Bananas", "Apples", "Oranges"];
    // foreach ($fruits as $i => $fruits) {
    //     # code...
    //     echo $i . " " . $fruits . "<br>";
    // }
    #iterate over associative array
    $persons = [
        'name' => "Seun",
        'suranme' => "Traverse",
        'age' => 30,
        'hobbies' => ['Tennis', 'video games']
    ];
    foreach($persons as $key => $value){
        if($key === 'hobbies') break;
        echo $value . '<br>';
    }
    ?>
</body>
</html>