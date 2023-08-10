<?php 

setcookie('name', 'seun', time() + 60, '/');

echo '<pre>';
var_dump($_COOKIE);
echo '<pre>';

?>