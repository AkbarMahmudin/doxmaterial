<?php

include '../../model/Outlet.php';

//ambil input value
$id = $_POST['id']; //untuk memfilter data yang akan di update
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];

//update data
$outletUpdated = updateOutlet($id, $kota, $alamat);

//handle error
if (!$outletUpdated) {
    echo "gagal mengupdate data";
    exit;
}

// redirect ke index ketika berhasil update data
header('location: ../../views/outlets/');
