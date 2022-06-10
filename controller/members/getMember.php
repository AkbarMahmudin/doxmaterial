<?php

include '../../model/Member.php';
include '../../model/DetailOrder.php';
include '../../model/Piutang.php';

$id = $_GET['id']; // ambil nilai id dari url
$member = getMemberById($id);
$detailOrder = getDetailByMemberId($id);
$detailTagihan = getTagihanByMemberId($id);
$riwayatPembayaran = getHistoryPembayaran($id);
