<?php
include '../../model/Employees.php';
include '../../helpers/upload-image.php';

session_start();

//UPDATE EMPLOYEES
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$outlet = $_POST['outlet'];
$file_gambar = $_POST['file_gambar'];
$gambar = $_FILES['gambar'];


// cek gambar
if (isset($_FILES['gambar']) && $gambar['error'] != 4) {
  $result = upload($_FILES['gambar'], 'employees');

  switch ($result) {
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
  }

  if ($result === -1 || $result === -2) {
    $_SESSION['response'] = $response;
    header("location:../../views/employees/edit-employees.php?id=".$id);
    return;
  }
  
  $updateEmployees = update_employees($id, $nama, $username, $password, $role, $outlet, $result);
  if ($updateEmployees) unlink("../../img/employees/".$file_gambar);

} else {
  $updateEmployees = update_employees($id, $nama, $username, $password, $role, $outlet);
}


if ($updateEmployees === false){
  $response = [
    'status' => 'error',
    'message' => 'Pegawai gagal diupdate!'
  ];
  $_SESSION['response'] = $response;
  header("location:../../views/employees/edit-employees.php?id=".$id);
  return;
}

// menampilkan notifikasi
$_SESSION['response'] = [
  'status' => 'success',
  'message' => 'Data berhasil diperbarui'
];
header("location:../../views/employees/index.php");


?>