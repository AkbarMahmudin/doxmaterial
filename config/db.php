<?php 
    $connect = mysqli_connect("localhost","root","");
    mysqli_select_db($connect,"db_rpl");
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    define('DB', $connect);
