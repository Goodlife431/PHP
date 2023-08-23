<?php 


interface DatabaseInterface {

    public function getOrders(): array;
    public function getOrdersById(int $Id);
    public function createOrder(array $data): bool;
    public function updateOrder(int $Id, array $data): bool;
    public function deleteOrder(int $Id):bool;

}


?>