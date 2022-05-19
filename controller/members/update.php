<?php

include '../../model/Member.php';

// ambil input value
$id = $_POST['id']; // untuk memfilter data yg akan diupdate
$namaLengkap = $_POST['nama'];
$telepon = $_POST['telepon'];
$jenisKelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// update data
$memberUpdated = updateMember($id, $namaLengkap, $jenisKelamin, $alamat, $telepon);

// handle error
if (!$memberUpdated) {
  echo "gagal mengupdate data";
  exit;
}

// redirect ke index ketika berhasil update data
header('location: ../../views/members/');
