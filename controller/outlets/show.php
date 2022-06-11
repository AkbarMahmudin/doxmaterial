<?php
include '../../model/Outlet.php';

$id = $_GET['id'];

$data = getOutletsById($id);
$data_stok = show_stock($id);
?>