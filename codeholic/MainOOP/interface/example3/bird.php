<?php 

require_once 'flyable.php';

class Birds implements flyableInterface {
    public function fly(){
        echo 'I am a bird. I am flying' .PHP_EOL;
    }
}

?>