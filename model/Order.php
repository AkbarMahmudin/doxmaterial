<?php

include dirname(__DIR__) . '/config/db.php';

function createOrders($pegawaiId, $memberId, $metode, $telepon, $rekening, $status, $total) {
  $query = "INSERT INTO orders(pegawai_id, member_id, metode, telepon, rekening, status, total) VALUES 
  ('$pegawaiId', '$memberId', '$metode', '$telepon', '$rekening', '$status', $total)";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return $result ? true : false;
}

// func : get data orders berdasarkan pegawai_id dan member_id
function getLastOrder($pegawaiId) {
  $query = "SELECT MAX(id) AS id FROM orders GROUP BY pegawai_id HAVING pegawai_id = '$pegawaiId'";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return $result ? mysqli_fetch_assoc($result) : false;
}

// func : get data order berdasarkan id
function getOrderById($id) {
  $result = mysqli_query($GLOBALS['DB'], "SELECT * FROM orders WHERE id = '$id'");

  return $result ? mysqli_fetch_array($result) : false;
}
