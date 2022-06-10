<?php

include '../../model/Barang.php';

$stokId = $_GET['id'];
$barang = showByStokId($stokId);

$response = [
  'status' => 'success',
  'data' => $barang
];

echo json_encode($response);
