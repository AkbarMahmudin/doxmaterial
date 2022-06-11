<?php

include '../../model/DetailOrder.php';

$outletId = $user['outlet_id'];

if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
  $startDate = $_GET['start_date'];
  $endDate = $_GET['end_date'];
  $orders = getDetailOrders($outletId, $startDate, $endDate);
} else {
  $orders = getDetailOrders($outletId);
}
