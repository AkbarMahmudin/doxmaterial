<?php

include '../../model/Barang.php';
include '../../model/User.php';

session_start();

// Cek session dan cookie
if (isset($_COOKIE['userId'])) {
  $user = getUserById($_COOKIE['userId']);
} else {
  if (!isset($_SESSION['login'])) {
    $response = [
      'status' => 'error',
      'msg' => 'User no login',
    ];
    echo json_encode($response);
    return;
  }
  $user = getUserById($_SESSION['userId']);
}

$outletId = $user['outlet_id'];

if ($outletId) {
  if (isset($_GET['nama_barang'])) {
    $namaBarang = $_GET['nama_barang'];
    $barang = view($outletId, $namaBarang);
  } else {
    $barang = view($outletId);
  }
} else {
  $barang = view();
}

$response = [
  'status' => 'success',
  'data' => $barang
];

echo json_encode($response);
