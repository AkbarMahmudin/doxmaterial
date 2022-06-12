<?php

include '../../model/Outlet.php';
@include '../../helpers/upload-image.php';

session_start();

$kota = $_POST['kota'];
$alamat = $_POST['alamat'];

if (isset($_FILES['gambar'])) {
    $gambar = $_FILES['gambar']; // ambil nilai inputan file
    /* 
      panggil func upload
      param1: global variable $_FILES
      param2: nama folder
    **/
    $result = upload($gambar, 'outlets');
  
    switch ($result) {
      case 0:
        $response = [
          'status' => 'warning',
          'message' => 'Pilih gambar terlebih dahulu!'
        ];
        break;
      case -1:
        $response = [
          'status' => 'warning',
          'message' => 'Ekstensi file tidak valid!'
        ];
        break;
      case -2:
        $response = [
          'status' => 'warning',
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
  
    if ($result < 1) {
      $_SESSION['response'] = $response;
      header('location: ../../views/outlets/add-outlets.php');
      return;
    }
}

$newOutlet = createNewOutlet($kota, $alamat, $result);

if (!$newOutlet) {
  $_SESSION['response'] = [
    'status' => 'error',
    'message' => 'Outlet gagal ditambahkan'
  ];
  header('location: ../../views/outlets/add-outlets.php');
  return;
}

$_SESSION['response'] = [
  'status' => 'success',
  'message' => 'Outlet baru berhasil ditambahkan'
];
header('location: ../../views/outlets/index.php');


?>