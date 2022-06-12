<?php

include dirname(__DIR__) . '/config/db.php';

function login($username, $password)
{
  $query = "SELECT id, username, password, role, outlet_id, gambar FROM pegawai WHERE username = '$username' AND password = '$password' LIMIT 1";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}

function getUserById($id, $outletId = null)
{
  $query = "SELECT id, username, role, outlet_id, gambar FROM pegawai
            WHERE id = '$id'";
  if ($outletId) {
    $query = "SELECT p.id, p.username, p.role, p.outlet_id, p.gambar, o.alamat, o.kota FROM pegawai p 
              INNER JOIN outlet o ON p.outlet_id = o.id 
              WHERE p.id = '$id' AND o.id = '$outletId'";
  }
  $result = mysqli_query($GLOBALS['DB'], $query);

  return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}


