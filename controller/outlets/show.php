<?php
include '../../model/Outlet.php';
// include '../../model/Barang.php';

$id = $_GET['id'];

$data = getOutletsById($id);
$data_stok = getStokByOuletId($id);
$data_barang = show_barang($id);
?>