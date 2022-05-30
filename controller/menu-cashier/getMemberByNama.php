<?php

include '../../model/Member.php';

$nama = $_GET['nama'];

$members = getMemberByName($nama);

$response = [
  'status' => 'success',
  'data' => $members
];

echo json_encode($response);

