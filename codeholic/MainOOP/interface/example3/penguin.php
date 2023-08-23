<?php 

require_once 'swimable.php';

class Penguin implements swimableInterface{
    public function swim(){
        echo 'I am a Penguin. I am swimming' .PHP_EOL;
    }
}

?>