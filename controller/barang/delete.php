<?php

include '../../model/Barang.php';
session_start();

$id = $_POST['id'];
$gambar = $_POST['gambar'];

// hapus data barang
$barangDeleted = delete_barang($id);

// handle error
if (!$barangDeleted) {
  $_SESSION['response'] = [
    'status' => 'error',
    'message' => 'Barang gagal dihapus'
  ];
  header('location: ../../views/barang/');
}

// redirect ke index ketika berhasil delete data
$response = [
  'status' => 'success',
  'message' => 'Barang berhasil dihapus'
];
$_SESSION['response'] = $response;

// hapus gambar di folder
unlink("../../img/barang/".$gambar);

header('location: ../../views/barang/');

