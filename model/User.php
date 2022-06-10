<?php

include dirname(__DIR__) . '/config/db.php';

function login($username, $password)
{
  $query = "SELECT id, username, password, role, outlet_id FROM pegawai WHERE username = '$username' AND password = '$password' LIMIT 1";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}

function getUserById($id)
{
  $query = "SELECT id, username, role, outlet_id FROM pegawai
            WHERE id = '$id'";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}


