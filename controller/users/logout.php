<?php

session_start();

$_SESSION = [];
session_unset();
session_destroy();

if (isset($_COOKIE['userId']) && isset($_COOKIE['role'])) {
  session_start();
  $_SESSION['remember'] = false;
}

header('location: ../../index.php');
exit;
