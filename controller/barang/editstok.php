<?php
include '../../model/Barang.php';
include '../../model/Stok.php';
session_start();

$idbarang = $_POST['idbrg'];
$idstok = $_POST['idstok'];
$stok = $_POST['stok'];

$editStok = updateStokById($idstok, $stok);

if ($editStok !== false) {
    $response = [
        'status' => 'success',
        'message' => 'Stok Barang Berhasil Di Update'
      ];

    $_SESSION['response'] = $response;
    header("location:../../views/barang/show-barang.php?id=$idbarang");

}
?>