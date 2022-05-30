<?php

include '../../helpers/upload-image.php';

session_start();

$response;

if (isset($_FILES['gambar'])) {
  $gambar = $_FILES['gambar']; // ambil nilai inputan file
  /* 
    panggil func upload
    param1: global variable $_FILES
    param2: nama folder
  **/
  $result = upload($gambar, 'test');

  switch ($result) {
    case 0:
      $response = [
        'status' => 'error',
        'message' => 'Pilih gambar terlebih dahulu!'
      ];
      break;
    case -1:
      $response = [
        'status' => 'error',
        'message' => 'Ekstensi file tidak valid!'
      ];
      break;
    case -2:
      $response = [
        'status' => 'error',
        'message' => 'Ukuran file terlalu besar!'
      ];
      break;
    default:
      $response = [
        'status' => 'success',
        'message' => 'file berhasil ditambahkan'
      ];
      break;
  }

  // menampilkan notifikasi
  $_SESSION['response'] = $response;
  
  header('location: ../../views/members/index.php');
}

