<?php

include '../../model/Outlet.php';
include '../../helpers/upload-image.php';

session_start();

//ambil input value
$id = $_POST['id']; //untuk memfilter data yang akan di update
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar'];
$file_gambar = $_POST['file_gambar'];
 
if (isset($_FILES['gambar']) && $gambar['error'] != 4) {
    $result = upload($_FILES['gambar'], 'outlets');
  
    switch ($result) {
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
    }
  
    if ($result === -1 || $result === -2) {
      $_SESSION['response'] = $response;
      header("location:../../views/outlets/edit-outlets.php?id=".$id);
      return;
    }
    
    $update_outlet = updateOutlet($id, $kota, $alamat, $result);
    if ($update_outlet) unlink("../../img/outlets/".$file_gambar);
  
} else {
    $update_outlet = updateOutlet($id, $kota, $alamat);
}
  
  if ($update_outlet === false){
    $response = [
      'status' => 'error',
      'message' => 'Outlet gagal diupdate!'
    ];
    $_SESSION['response'] = $response;
    header("location:../../views/outlets/edit-outlets.php?id=".$id);
    return;
  }
  
  // menampilkan notifikasi
  $_SESSION['response'] = [
    'status' => 'success',
    'message' => 'Data berhasil diperbarui'
  ];
  header("location:../../views/outlets/index.php");

?>

