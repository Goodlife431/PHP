<?php 

session_start();
echo session_id(). '<br>';

//More elegant way 
$_SESSION['counter'] ??=0;
$_SESSION['counter']++;
// if(isset($_SESSION['counter'])){
//     $_SESSION['counter']++;
// }else{
//     $_SESSION['counter'] = 1;
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>You have visted this page: <?php echo $_SESSION['counter'] ?> times</h1> 
</body>
</html>