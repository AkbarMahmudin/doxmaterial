<?php

include '../../model/Outlet.php';

//ambil input value
$id = $_POST['id']; //untuk memfilter data yang akan di update
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar'];
$file_gambar = $_POST['file_gambar'];

// cek gambar
if (isset($_FILES['gambar'])) {
  $result = upload($gambar, 'outlets');
  if ($result === -1) {
    $response = [
      'status' => 'error',
      'message' => 'Ekstensi file tidak valid!'
    ];
  } elseif ($result === -2) {
    $response = [
      'status' => 'error',
      'message' => 'Ukuran file terlalu besar!'
    ];
  } else {
    $response = [
      'status' => 'success',
      'message' => 'data berhasil diperbaharui'
    ];
    $gambar = $result;
  }
  
  // menampilkan notifikasi
  $_SESSION['response'] = $response;
}

//update data
$outletUpdated = updateOutlet($id, $kota, $alamat);

//handle error
if (!$outletUpdated) {
    echo "gagal mengupdate data";
    exit;
}

// redirect ke index ketika berhasil update data
header('location: ../../views/outlets/');
