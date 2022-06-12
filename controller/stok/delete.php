<?php

include '../../model/Stok.php';

session_start();

$stokId = $_POST['id'];
$outletId = $_GET['outlet_id'];

$stokDeleted = deleteStokById($stokId);
if (!$stokDeleted) {
  $_SESSION['response'] = [
    'status' => 'error',
    'message' => 'Stok gagal dihapus'
  ];
  header('location: ../../views/outlets/detail-outlets.php?id='.$outletId);
  return;
}

$_SESSION['response'] = [
  'status' => 'success',
  'message' => 'Stok berhasil dihapus'
];
header('location: ../../views/outlets/detail-outlets.php?id='.$outletId);