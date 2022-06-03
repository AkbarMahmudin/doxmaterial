<?php

include dirname(__DIR__) . '/config/db.php';

function getDetailOrders($outletId = null) {
  $query = "SELECT b.nama, o.id, b.harga, d.jumlah, d.total, o.tanggal FROM detail_orders d
            INNER JOIN orders o ON d.orders_id = o.id
            INNER JOIN stok s ON d.stok_id = s.id
            INNER JOIN barang b ON s.barang_id = b.id
            WHERE o.status = 'Lunas' ";
  if ($outletId) {
    $query .= "AND s.outlet_id = '$outletId' ";
  }
  $query .= "ORDER BY o.tanggal DESC, o.id DESC";

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

function getDetailByMemberId($memberId) {
  $query = "SELECT d.jumlah, b.nama, d.total, o.id, DATE_FORMAT(o.tanggal, '%d-%m-%Y') AS tanggal FROM detail_orders d 
            INNER JOIN orders o ON d.orders_id = o.id 
            INNER JOIN stok s ON d.stok_id = s.id 
            INNER JOIN barang b ON s.barang_id = b.id 
            WHERE o.member_id = '$memberId' 
            ORDER BY o.tanggal DESC, o.id DESC";
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
