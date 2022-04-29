<?php

include dirname(__DIR__).'/config/db.php';

function login($username, $password)
{
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
  $result = mysqli_query(DB, $query);

  return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}
