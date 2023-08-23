<?php 

require_once 'CacheInterface.php';

class RadisCache implements CacheInterface {
    public function set (String $keys, $values){
        echo 'Calling method'. __METHOD__.PHP_EOL;
    }
    public function get (String $keys){
        echo 'Calling method'. __METHOD__.PHP_EOL;
    }

    public function invalidate(string $keys){
        echo 'Calling method'. __METHOD__.PHP_EOL;
    }
    
}

?>