<?php

include dirname(__DIR__) . '/config/db.php';

function getEmployees(){
    $query = "SELECT * FROM pegawai";
    $result = mysqli_query($GLOBALS['DB'], $query);
    
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
      array_push($data, $row);
    }

    return (mysqli_num_rows($result) > 0)
    ? $data
    : false;
}

function createNewEmployees($nama, $username, $password, $role, $gambar){
    $query = "INSERT INTO pegawai(nama, username, password, role, gambar)
            VALUES('$nama', '$username', '$password', '$role', '$gambar')";
mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB'])>0)
    ? true
    : false;

}

function getEmployeesByID($id){
    $sql_query = "SELECT * FROM pegawai WHERE id = '$id'";
    $result = mysqli_query($GLOBALS['DB'], $sql_query);

    return (mysqli_num_rows($result) > 0)
    ? mysqli_fetch_assoc($result)
    : false;
}
