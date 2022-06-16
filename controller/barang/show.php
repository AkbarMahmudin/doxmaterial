<?php
include '../../model/Barang.php';

if (!isset($_GET['id'])){
    header("location:../../views/barang/index.php");
}
$id = $_GET['id'];

$data = show($id);
$data_stok = show_stock($id);
$data_outlet = show_outlet($id);
$total_stok = totalStokByBarangId($id);
?>