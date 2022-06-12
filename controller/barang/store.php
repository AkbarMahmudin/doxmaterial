<?php

include '../../model/Barang.php';
include '../../helpers/upload-image.php';

session_start();

// STORE
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar'];

// cek gambar
if (isset($_FILES['gambar'])) {
  $result = upload($gambar, 'barang');
  if ($result === 0) {
    $response = [
      'status' => 'error',
      'message' => 'Pilih gambar terlebih dahulu!'
    ];
  } elseif ($result === -1) {
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
      'message' => 'Barang berhasil ditambahkan'
    ];
    $gambar = $result;
    $newBarang = store($nama, $harga, $gambar);
  }

  if ($result < 1) {
    $_SESSION['response'] = $response;
    header("location:../../views/barang/add-barang.php");
    return;
  }

  $_SESSION['response'] = $response;
}

if ($newBarang){
  header("location:../../views/barang/index.php");
}else{
  header("location:../../views/barang/add-barang.php");
}


// $response = [
//   'status' => 'success',
//   'message' => 'Barang berhasil ditambahkan!'
// ];

// // menampilkan notifikasi
// $_SESSION['response'] = $response;

// header("location:../../views/barang/index.php");
