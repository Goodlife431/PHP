<?php 

$pdo = new PDO('mysql:host=localhost:81;port=3307;dbname=notes', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div>
        <form action="create.php" class="new-note" method="post">
           <input type="hidden" name="id"> 
           <input type="text" name="title" placeholder="Note title" autocomplete="on">
           <textarea name="description" cols="30" rows="4"
                placeholder="Note description"></textarea>
            <button>New note</button>
        </form>
    <div class="notes">
        <!-- <div class="note">
            <div class="title">
                <a href="">Sample note</a>
            </div>
            <div class="description">
                Sample note description
            </div>
            <small>15/10/2023 14:00</small>
            <button class="close">X</button>
            </div>
        </div> -->
    </div>
</body>
</html>