<?php
include '../../model/Barang.php';


if (isset($_GET['nama_barang'])) {
  $key = $_GET['nama_barang'];
  $datas = view(null, $key);
} else {
  $datas = view();
}
?>