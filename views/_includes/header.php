<?php

include '../../model/User.php';

session_start();

// Cek session dan cookie
if (isset($_COOKIE['userId'])) {
  $user = getUserById($_COOKIE['userId']);
} else {
  if (!isset($_SESSION['login'])) {
    header('location: ../login.php');
    exit;
  }
  $user = getUserById($_SESSION['userId']);
}
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DOX CAFFE | PoS</title>
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="../../img/logo.png"type = "image/x-icon">
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
<!-- Default style -->
<link rel="stylesheet" href="../../css/index.css">
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>