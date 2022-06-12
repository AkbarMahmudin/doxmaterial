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

function getEmployeesByUserName($username) {
    $query = "SELECT * FROM pegawai WHERE username = '$username'";
    $result = mysqli_query($GLOBALS['DB'], $query);
    
    return (mysqli_num_rows($result) > 0)
    ? mysqli_fetch_assoc($result)
    : false;
}

function createNewEmployees($nama, $username, $password, $role, $outletId, $gambar){
    $query = "INSERT INTO pegawai(nama, username, password, role, outlet_id, gambar)
            VALUES('$nama', '$username', '$password', '$role', '$outletId', '$gambar')";
            
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

function update_employees($id, $nama, $username, $role, $outlet, $password = null, $gambar = null){
    $query_update = "UPDATE pegawai SET nama='$nama', username='$username', role ='$role', outlet_id='$outlet' ";

    if ($password) {
        $query_update .= ", password = '$password'";
    }

    if($gambar != null){
        $query_update .= ", gambar='$gambar'";
    }

    $query_update .= " WHERE id ='$id'";
    
    $result = mysqli_query($GLOBALS['DB'], $query_update);

    return $result
    ? true
    : false;
}

function delete_employees($id){
    $query_delete = "DELETE FROM pegawai WHERE id = '$id'";
    mysqli_query($GLOBALS['DB'], $query_delete);

    return (mysqli_affected_rows($GLOBALS['DB'])>0)
    ? true
    : false;
}

