<?php

include '../../model/Stok.php';

session_start();

$outletId = $_GET['outlet_id'];
$stokId = $_POST['stok_id'];
$jumlah = $_POST['jumlah'];

$stokUpdated = updateStokById($stokId, $jumlah);

if (!$stokUpdated) {
  $_SESSION['response'] = [
    'status' => 'error',
    'message' => 'Stok gagal diperbarui'
  ];
  header('location: ../../views/outlets/detail-outlets.php?id='.$outletId);
  return;
}

$_SESSION['response'] = [
  'status' => 'success',
  'message' => 'Stok berhasil diperbarui'
];
header('location: ../../views/outlets/detail-outlets.php?id='.$outletId);
