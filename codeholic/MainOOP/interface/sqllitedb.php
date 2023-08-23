<?php 

require_once 'databaseInterface.php';

class SqlLiteDb implements DatabaseInterface{

    public function getOrders():array {
        echo 'Calling method'. __METHOD__.PHP_EOL;
        return [];
    }

    public function getOrdersById(int $Id) {
        echo 'Calling method'. __METHOD__.PHP_EOL;
       
    }

    public function createOrder(array $data): bool {
        echo 'Calling method'. __METHOD__.PHP_EOL;
        return true;
    }
    public function updateOrder(int $Id, array $data): bool {
        echo 'Calling method'. __METHOD__.PHP_EOL;
        return true;
    }

    public function deleteOrder(int $Id): bool{
        echo 'Calling method'. __METHOD__.PHP_EOL;
        return true;
    }

}


?>