<?php

include '../../model/Member.php';

$namaLengkap = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

$newMember = createNewMember($namaLengkap, $jenisKelamin, $alamat, $telepon);

if ($newMember === false) {
  $response = [
    'status' => 'success',
    'message' => 'Member baru gagal ditambahkan',
  ];
}

$data = getLastMember();
$response = [
  'status' => 'success',
  'message' => 'Member baru berhasil ditambahkan',
  'data' => $data['id']
];

echo json_encode($response);
