<?php

include '../../model/Outlet.php';
@include '../../helpers/upload-image.php';

// if (!isset($_POST)){
//     echo "isi inputan";
//     exit;
// }

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
   
}

 $newOutlet = createNewOutlet($kota, $alamat, $result);

    if ($newOutlet === true) {
        header('location: ../../views/outlets/index.php?status=success');
    }


?>