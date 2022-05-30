<?php

include '../../model/Member.php';

$id = $_GET['id']; // ambil nilai id dari url
$member = getMemberById($id);

