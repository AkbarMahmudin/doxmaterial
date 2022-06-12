<?php

include '../../model/User.php';

session_start();
  
if (!isset($_POST['username']) && !isset($_POST['password'])) {
  echo 'isi username/password';
  return;
}

$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

$user = login($username, $password);

if (!$user) {
  // notifikasi user salah
  $_SESSION['error_login'] = true;
  header('location: ../../views/login.php');
  return;
}

session_start();

$_SESSION['userId'] = $user['id'];
$_SESSION['role'] = $user['role'];
$_SESSION['login'] = true;

if (isset($_POST['remember'])) {
  $_SESSION['remember'] = true;
}

header('location: ../../index.php');
