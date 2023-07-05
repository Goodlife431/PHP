<?php
$str = "Apples and banana";
$pattern = "/ba(na){2}/i";
echo preg_match_all($pattern, $str);
?>