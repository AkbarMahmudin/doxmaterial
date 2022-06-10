<?php

include '../../model/Order.php';
include '../../model/DetailOrder.php';

$orderId = isset($_GET['id']) ? $_GET['id'] : null;

$order = getOrderById($orderId);
$detailOrders = getDetailOrderByOrderId($orderId);
