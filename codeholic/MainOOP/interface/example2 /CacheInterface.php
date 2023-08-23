<?php 

interface CacheInterface {
    public function set( String $keys, $values);
    public function get(String $keys);
    public function invalidate (String $keys);

    
}

?>