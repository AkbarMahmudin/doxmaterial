<?php

include '../../model/Employees.php';
session_start();

$id = $_GET['id'];
$gambar = $_GET['gambar'];

// hapus data barang
$employeesDeleted = delete_employees($id);

// handle error
if (!$employeesDeleted) {
  $_SESSION['response'] = [
    'status' => 'error',
    'message' => 'Pegawai gagal dihapus'
  ];
  header('location: ../../views/employees/');
}

// redirect ke index ketika berhasil delete data
$response = [
  'status' => 'success',
  'message' => 'Pegawai berhasil dihapus'
];
$_SESSION['response'] = $response;

// hapus gambar di folder
unlink("../../img/employees/".$gambar);

header('location: ../../views/employees/');


?>