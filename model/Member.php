<?php

// koneksi db
// include dirname(__DIR__) . '/config/db.php';
include '../../config/db.php';

// func : mengambil seluruh data member
function getMembers() {
  $query = "SELECT * FROM member ORDER BY nama_lengkap";
  $result = mysqli_query($GLOBALS['DB'], $query);

  $data = [];
  while($row = mysqli_fetch_assoc($result)) {
    array_push($data, $row);
  }
  
  return (mysqli_num_rows($result) > 0)
  ? $data
  : false;
}

// func : mengambil data member berdasarkan id
function getMemberById($id) {
  $query = "SELECT * FROM member WHERE id = '$id'";
  $result = mysqli_query($GLOBALS['DB'], $query);

  return (mysqli_num_rows($result) > 0)
  ? mysqli_fetch_assoc($result)
  : false;
}

// func : menambah data member
function createNewMember($namaLengkap, $jenisKelamin, $alamat, $telepon) {
  $query = "INSERT INTO member(nama_lengkap, jenis_kelamin, alamat, telepon)
            VALUES('$namaLengkap', '$jenisKelamin', '$alamat', '$telepon')";
  mysqli_query($GLOBALS['DB'], $query);

  return (mysqli_affected_rows($GLOBALS['DB']) > 0)
  ? true
  : false;
}

// func : mengupdate data member
function updateMember($id, $namaLengkap, $jenisKelamin, $alamat, $telepon) {
  $query = " UPDATE member SET
    nama_lengkap = '$namaLengkap',
    jenis_kelamin = '$jenisKelamin',
    telepon = '$telepon',
    alamat = '$alamat'
    WHERE id = '$id'
  ";
  mysqli_query($GLOBALS['DB'], $query);

  return (mysqli_affected_rows($GLOBALS['DB']) > 0)
  ? true
  : false;
}

// func : delete data member berdasarkan id
function deleteMemberById($id) {
  $query = "DELETE FROM member WHERE id = '$id'";
  mysqli_query($GLOBALS['DB'], $query);
  
  return (mysqli_affected_rows($GLOBALS['DB']) > 0)
  ? true
  : false;
}

// func : get data member by nama || id
function getMemberByName($nama) {
  $query = "SELECT * FROM member WHERE nama_lengkap LIKE '%$nama%'";
  $result = mysqli_query($GLOBALS['DB'], $query);

  if ($result) {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($data, $row);
    }
    return $data;
  }
  return false;
}

// func : get data terakhir || new data inserted
function getLastMember() {
  $result = mysqli_query($GLOBALS['DB'], "SELECT MAX(id) AS id FROM member");

  return $result ? mysqli_fetch_assoc($result) : false;
}
