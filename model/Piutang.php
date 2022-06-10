<?php

include dirname(__DIR__) . '/config/db.php';

function getTagihanByMemberId($memberId) {
  $query = "SELECT p.* FROM piutang p
            INNER JOIN orders o ON p.orders_id = o.id
            WHERE o.member_id = '$memberId' AND p.jumlah_utang != 0";
  $result = mysqli_query($GLOBALS['DB'], $query);

  if ($result) {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($data, $row);
    }
    return $data;
  }
  return false;
}

function createPembayaran($piutangId, $nominal) {
  mysqli_query($GLOBALS['DB'], "CALL pembayaran($nominal, $piutangId, @pesan)");
  // $query = "INSERT INTO riwayat_pembayaran(piutang_id, nominal) VALUES($piutangId, $nominal)";
  $query = "SELECT @pesan";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return $result 
  ? mysqli_fetch_assoc($result)
  : false;
}

function getHistoryPembayaran($memberId) {
  $query = "SELECT o.id, rp.nominal, rp.tanggal FROM riwayat_pembayaran rp
            INNER JOIN piutang p ON rp.piutang_id = p.id
            INNER JOIN orders o ON P.orders_id = o.id
            WHERE o.member_id = '$memberId'
            ORDER BY rp.tanggal DESC, o.id DESC";
  $result = mysqli_query($GLOBALS['DB'], $query);

  if ($result) {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($data, $row);
    }
    return $data;
  }
  return false;
}
