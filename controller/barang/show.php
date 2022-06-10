<?php
include '../../model/Barang.php';

$id = $_GET['id'];

$data = show($id);
$data_stok = show_stock($id);
?>