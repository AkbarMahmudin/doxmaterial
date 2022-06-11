<?php

include '../../model/Outlet.php';
session_start();

$id = $_POST['id'];
$gambar = $_POST['gambar'];

// hapus data barang
$outletDeleted = delete_outlets($id);

// handle error
if (!$outletDeleted) {
  $_SESSION['response'] = [
    'status' => 'error',
    'message' => 'Outlet gagal dihapus'
  ];
  header('location: ../../views/outlets/');
}

// redirect ke index ketika berhasil delete data
$response = [
  'status' => 'success',
  'message' => 'Outlet berhasil dihapus'
];
$_SESSION['response'] = $response;

// hapus gambar di folder
unlink("../../img/outlets/".$gambar);

header('location: ../../views/outlets/');

