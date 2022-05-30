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
      'message' => 'file berhasil ditambahkan'
    ];
    $gambar = $result;
  }
}
$newBarang = store($nama, $harga, $gambar);

if (!$newBarang){
  $response = [
    'status' => 'error',
    'message' => 'Barang gagal ditambahkan!'
  ];
  $_SESSION['response'] = $response;
  header("location:../../views/barang/add-barang.php");
  return;
}

$response = [
  'status' => 'success',
  'message' => 'Barang berhasil ditambahkan!'
];

// menampilkan notifikasi
$_SESSION['response'] = $response;

header("location:../../views/barang/index.php");
