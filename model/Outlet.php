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
function updateOutlet($id, $kota, $alamat, $gambar=NULL) {
    $query = "UPDATE outlet SET kota ='$kota', alamat ='$alamat'";
    if($gambar) {
        $query .= ", gambar = '$gambar'";
    }
    $query .= "WHERE id = '$id'";
    mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}

function show_stock($id){
    $query = "SELECT s.*, b.nama AS nama_barang FROM stok s INNER JOIN barang b ON s.barang_id = b.id WHERE s.barang_id = '$id'";
    $result = mysqli_query($GLOBALS['DB'], $query);

    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row; 
    }

    return $data;
}

function delete_outlets($id){
    $query = "DELETE FROM outlet WHERE id = '$id'";
    $result = mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}

