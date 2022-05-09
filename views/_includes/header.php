<?php

include '../../model/User.php';

session_start();

// Cek session dan cookie
if (isset($_COOKIE['userId'])) {
  $user = getUserById($_COOKIE['userId']);
} else {
  if (!isset($_SESSION['login'])) {
    header('location: ../login.php');
    exit();
  }
  $user = getUserById($_SESSION['userId']);
}
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DOX CAFFE | PoS</title>
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Default style -->
<link rel="stylesheet" href="../../css/index.css">
<link rel="icon" href="../../img/logo.png"type = "image/x-icon">