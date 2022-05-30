<?php

include dirname(__DIR__) . '/config/db.php';

function createDetailOrders($orderId, $data) {
  $query = "INSERT INTO detail_orders(stok_id, orders_id, jumlah, total) VALUES ";
  foreach ($data as $key => $row) {
    $stokId = $row['stok_id'];
    $jumlah = $row['jumlah'];
    $total = $row['total'];

    $query .= "($stokId, '$orderId', $jumlah, $total)";
    
    if ($key != count($data) - 1) {
      $query .= ", ";
    }
  }

  $result = mysqli_query($GLOBALS['DB'], $query);

  return $result ? true : false;
}

function getDetailOrderByOrderId($orderId) {
  $query = "SELECT d.*, b.nama, b.harga FROM detail_orders d
    INNER JOIN stok s ON d.stok_id = s.id
    INNER JOIN barang b ON s.barang_id = b.id
    WHERE d.orders_id = '$orderId'";
  $result = mysqli_query($GLOBALS['DB'], $query);

  if ($result) {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($data, $row);
    }
    return $data;
  }
  return false;
}
