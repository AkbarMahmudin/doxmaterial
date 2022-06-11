<?php
include dirname(__DIR__) . '/config/db.php';

function store($nama,$harga,$gambar){
    $query = "INSERT INTO barang VALUES ('','$nama','$harga','$gambar')";
    mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}
    
function view($outletId = null, $key = null){
    $query = "SELECT * FROM barang ";
    if ($outletId) {
        $query = "SELECT b.*, s.jumlah AS stok_barang, s.id AS stok_id FROM barang b
        INNER JOIN stok s ON s.barang_id = b.id
        INNER JOIN outlet o ON s.outlet_id = o.id
        WHERE s.outlet_id = '$outletId' ";
    }

    if ($key) {
        $outletId
            ? $query .= "AND "
            : $query .= "WHERE ";

        $query .= "nama LIKE '%$key%' ";
    }

    $query .= "ORDER BY id ASC ";

    $result = mysqli_query($GLOBALS['DB'], $query);
    
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row; 
    }

    return $data;
}

function show($id) {
    $query = "SELECT * FROM barang WHERE id = '$id'";
    $result = mysqli_query($GLOBALS['DB'], $query);
    
    return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}

function show_stock($id){
    $query = "SELECT s.*, o.alamat AS alamat_outlet FROM stok s INNER JOIN outlet o ON s.outlet_id = o.id WHERE s.barang_id = '$id'";
    $result = mysqli_query($GLOBALS['DB'], $query);

    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row; 
    }

    return $data;
}

function update_barang($id,$nama,$harga,$gambar = NULL){
    $query = "UPDATE barang SET nama='$nama', harga='$harga'WHERE id='$id'";
    if($gambar){
        $query = "UPDATE barang SET nama='$nama', harga='$harga', gambar='$gambar'WHERE id='$id'";

        mysqli_query($GLOBALS['DB'], $query);
        return -1;
    }
    mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}

function delete_barang($id){
    $query = "DELETE from barang WHERE id = '$id'";
    mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB']) > 0)
    ? true
    : false;
}

function showByStokId($stokId) {
    $query = "SELECT b.*, s.id AS stok_id FROM barang b INNER JOIN stok s ON b.id = s.barang_id WHERE s.id = '$stokId'";
    $result = mysqli_query($GLOBALS['DB'], $query);
    
    return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}
