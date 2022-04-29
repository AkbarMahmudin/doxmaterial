<?php

session_start();

if (!isset($_SESSION['login'])) {
  header('location: views/login.php');
  return;
}

if ($_SESSION['role'] === 'admin') {
  header('location: views/dashboard');
}

if ($_SESSION['role'] === 'cashier') {
  header('location: views/menu-cashier');
}
