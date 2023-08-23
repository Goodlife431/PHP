<?php 

require_once 'swimable.php';
require_once 'flyable.php';

class Duck implements swimableInterface, flyableInterface{
    public function swim(){
        echo 'I am a duck. I am swimming' .PHP_EOL;
    }
    public function fly(){
        echo 'I am a duck. I am flying' .PHP_EOL;
    }
}

?>