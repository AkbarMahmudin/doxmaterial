<?php

// koneksi db
include dirname(__DIR__) . '/config/db.php';

function getOutlets() {
    $query = "SELECT * FROM outlet";
    $result = mysqli_query($GLOBALS['DB'], $query);

    $data = [];
    while($row = mysqli_fetch_assoc($result)) {
        array_push($data, $row);
    }

    return (mysqli_num_rows($result) > 0)
    ? $data
    : false;
}

function createNewOutlet($kota, $alamat) {
    $query = "INSERT INTO outlet(kota, alamat)
                VALUES('$kota', '$alamat')";
    $newData = mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}