<?php

include '../../model/Piutang.php';

session_start();

$memberId = $_GET['id'];
$piutangId = $_POST['piutang_id'];
$nominal = $_POST['nominal'];

$piutangUpdated = createPembayaran($piutangId, $nominal);

if ($piutangUpdated['@pesan'] !== 'Success') {
  $response = [
    'status' => 'error',
    'message' => $piutangUpdated['@pesan']
  ];
} else {
  $response = [
    'status' => 'success',
    'message' => 'Tagihan berhasil dibayarkan'
  ];
}

$_SESSION['response'] = $response;
header("location: ../../views/members/detail-member.php?id=$memberId");

