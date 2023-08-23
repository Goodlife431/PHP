<?php 

require_once 'databaseInterface.php';
class Application {
    public $db;

    public function __construct(DatabaseInterface $db){
        $this->db = $db;
    }
}

?>