<?php

// koneksi db
include dirname(__DIR__) . '/config/db.php';

function deleteStokById($id) {
  $query = "DELETE FROM stok WHERE id = '$id'";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return $result ? true : false;
}

function updateStokById($id, $jumlah) {
  $query = "UPDATE stok SET jumlah = '$jumlah' WHERE id = '$id'";
  mysqli_query($GLOBALS['DB'], $query);
  
  return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}
