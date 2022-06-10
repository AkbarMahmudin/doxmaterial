<?php

include '../../model/Outlet.php';

$id = $_GET['id']; // ambil nilai id dari url
$outlet = getOutletsById($id);