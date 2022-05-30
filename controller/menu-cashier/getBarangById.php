<?php

include '../../model/Barang.php';

$id = $_GET['id'];
$barang = show($id);

$response = [
  'status' => 'success',
  'data' => $barang
];

echo json_encode($response);
