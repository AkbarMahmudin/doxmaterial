<?php
include '../../model/Barang.php';

// GET KODE BARANG
$kodeBarang = getKodeBarang();

// STORE
if (!isset($_POST['id']) ) {
    return;
  }
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$temporary = $_FILES['gambar']['tmp_name'];

$store = store($id, $nama, $harga, $gambar, $temporary);

if (!$store){
    header("location:../../views/barang/add-barang.php?pesan=fail");
    return;
}

header("location:../../views/barang/index.php?pesan=success");

?>