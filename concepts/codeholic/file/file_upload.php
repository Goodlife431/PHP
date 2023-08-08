<?php 
$errorMessage = '';

echo '<pre>';
var_dump($_FILES);
echo '</pre>';
if(isset($_FILES['file'])){


$file = $_FILES['file'];
    if($file['size'] > 5 * 1024 * 1024){
        $errorMessage = 'You can upload more than 5mb files';
}
move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $errorMessage ?></p>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="name"><br>
        <button>submit</button>
    </form>
</body>
</html>