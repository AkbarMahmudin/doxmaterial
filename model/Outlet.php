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

function createNewOutlet($kota, $alamat, $gambar) {
    $query = "INSERT INTO outlet(kota, alamat, gambar)
                VALUES('$kota', '$alamat', '$gambar')";
    $newData = mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}

function getOutletsById($id) {
    $query = "SELECT * FROM outlet WHERE id = '$id'";
    $result = mysqli_query($GLOBALS['DB'], $query);
  
    return (mysqli_num_rows($result) > 0)
    ? mysqli_fetch_assoc($result)
    : false;
}

//fungsi untuk mengupdate data outlet
function updateMember($id, $kota, $alamat) {
    $query = "UPDATE outlet SET id = '$id'";
    mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}