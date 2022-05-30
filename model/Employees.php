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

function createNewEmployees($nama, $username, $password, $role){
    $query = "INSERT INTO pegawai(nama, username, password, role)
            VALUES('$nama', '$username', '$password', '$role')";
mysqli_query($GLOBALS['DB'], $query);

    return (mysqli_affected_rows($GLOBALS['DB'])>0)
    ? true
    : false;

}
