<?php 

require_once 'application.php';
require_once 'mysqldb.php';
require_once 'restdb.php';
require_once 'sqllitedb.php';

$app = new Application((new SqlLiteDb()));

$app->db->getOrders();
$app->db->getOrdersById(1);
$app->db->createOrder([]);
$app->db->updateOrder(1, []);
$app->db->deleteOrder(1)

?>