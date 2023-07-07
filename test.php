<?php
$nameErr = $emailErr = $genderErr = $website = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST ["name"])){
        $nameErr = "Name is required";
    }
    else{
        $name = test_input($_POST["name"]);
    }

    if(empty($_POST["email"])) {
     $emailErr = "Email is required";   
    }
    else{
        $email = test_input($_POST["email"]);
    }

    if(empty($_POST["website"])) {
        $emailErr = "Email is required";   
       }
       else{
           $email = test_input($_POST["website"]);
       }

       if(empty($_POST["comment"])) {
        $emailErr = "Email is required";   
       }
       else{
           $email = test_input($_POST["comment"]);
       }

       if(empty($_POST["gender"])) {
        $emailErr = "Email is required";   
       }
       else{
           $email = test_input($_POST["gender"]);
       }
}
//VALIDATE NAME
$name = test_input($_POST["name"]);
if(!preg_match("/^[a-zA-Z-']*$/", $name)){
    $nameErr = "Only letters and white space allowed";
}
//VALIDATE EMAIL
$email = test_input($_POST["email"]);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailErr = "Invalid email format";
}
//VALIDATE URL
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>