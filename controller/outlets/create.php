<?php

include '../../model/Outlet.php';

// if (!isset($_POST)){
//     echo "isi inputan";
//     exit;
// }

$kota = $_POST['kota'];
$alamat = $_POST['alamat'];

$newOutlet = createNewOutlet($kota, $alamat);

if ($newOutlet === true) {
    header('location: ../../views/outlets/index.php?status=success');
}

?>