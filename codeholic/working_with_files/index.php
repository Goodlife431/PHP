<?php 
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
//create directory
mkdir('test');

//rename directory
rename('test', 'myfolder');
//delete directory
rmdir('myfolder');
//read files and folder inside directory 
$file = scandir('./');
echo '<pre>';
var_dump($file);
echo '<pre>';




?>