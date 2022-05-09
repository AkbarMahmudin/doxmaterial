<?php

include '../../model/User.php';
  
if (!isset($_POST['username']) && !isset($_POST['password'])) {
  echo 'isi username/password';
  return;
}

$username = $_POST['username'];
$password = $_POST['password'];

$user = login($username, $password);

if (!$user) {
  // echo 'username/password salah';
  header('location: ../../views/login.php?error=true');
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
