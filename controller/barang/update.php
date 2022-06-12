<?php

include '../../model/Barang.php';
include '../../helpers/upload-image.php';

session_start();

// UPDATE
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar'];
$file_gambar = $_POST['file_gambar'];

// cek gambar
if (isset($_FILES['gambar'])) {
  $result = upload($gambar, 'barang');
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
    $updateBarang = update_barang($id, $nama, $harga, $gambar);
  }
  
  // menampilkan notifikasi
  $_SESSION['response'] = $response;
}
if (!$updateBarang){
  header("location:../../views/barang/show-barang.php?id=$id");
  return;
}
elseif ($updateBarang === -1){
    unlink("../../img/barang/".$file_gambar);
    header("location:../../views/barang/show-barang.php?id=$id");
}
else {
  header("location:../../views/barang/show-barang.php?id=$id");
}

