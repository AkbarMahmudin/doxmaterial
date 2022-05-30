<?php

session_start();

// cek & delete cookie
if (isset($_SESSION['remember']) && $_SESSION['remember'] === false) {
  setcookie('userId', '', time() - 5 * 24 * 60 * 60);
  setcookie('role', '', time() - 5 * 24 * 60 * 60);
}

if (!isset($_SESSION['login']) && !isset($_COOKIE['userId'])) {
  header('location: views/login.php');
  return;
}

// set cookie
if (isset($_SESSION['remember']) && $_SESSION['remember'] === true) {
  setcookie('userId', $_SESSION['userId'], time() + 5 * 24 * 60 * 60);
  setcookie('role', $_SESSION['role'], time() + 5 * 24 * 60 * 60);
}

if ($_SESSION['role'] === 'admin' || $_COOKIE['role'] === 'admin') {
  header('location: views/dashboard');
}

if ($_SESSION['role'] === 'kasir' || $_COOKIE['role'] === 'kasir') {
  header('location: views/menu-cashier');
}
