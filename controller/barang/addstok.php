<?php
include '../../model/Barang.php';
session_start();

$stok = $_POST['stock'];
$outletId = $_POST['outlet'];
$barang_id = $_POST['idbrg'];

$newStok = addStok($stok, $outletId, $barang_id);

if ($newStok !== false) {
    $response = [
        'status' => 'success',
        'message' => 'Stok Barang Berhasil Ditambahkan di Outlet'
      ];

    $_SESSION['response'] = $response;
    header("location:../../views/barang/show-barang.php?id=$barang_id");
}
?>