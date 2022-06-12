<?php

include '../../model/Stok.php';

session_start();

$outletId = $_POST['outlet_id'];
$barangId = $_POST['barang'];
$jumlah = $_POST['jumlah'];

$newStok = createStok($jumlah, $outletId, $barangId);
if ($newStok !== false) {
  $response = [
      'status' => 'success',
      'message' => 'Stok Barang Berhasil Ditambahkan di Outlet'
    ];

  $_SESSION['response'] = $response;
  header("location:../../views/outlets/detail-outlets.php?id=$outletId");
}
