<?php

include '../../model/Barang.php';
include '../../model/User.php';

session_start();

$barang = view();
if (isset($_SESSION['userId'])) {
  $user = getUserById($_SESSION['userId']);
  $outletId = $user['outlet_id'];
  if ($outletId !== null) {
    $barang = view($outletId);
  }
}
$response = [
  'status' => 'success',
  'data' => $barang
];

echo json_encode($response);
