<?php

include '../../model/Member.php';
session_start();

$id = $_POST['id'];

// hapus data member
$memberDeleted = deleteMemberById($id);

// handle error
if (!$memberDeleted) {
  echo 'gagal menghapus data';
  exit;
}

// redirect ke index ketika berhasil delete data
$response = [
  'status' => 'success',
  'message' => 'Member berhasil dihapus'
];
$_SESSION['response'] = $response;
header('location: ../../views/members/');

