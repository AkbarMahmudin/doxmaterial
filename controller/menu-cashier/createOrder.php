<?php

include '../../model/User.php';
include '../../model/Order.php';
include '../../model/DetailOrder.php';

session_start();

// Cek session dan cookie
if (isset($_COOKIE['userId'])) {
  $user = getUserById($_COOKIE['userId']);
} else {
  if (!isset($_SESSION['login'])) {
    header('location: ../login.php');
    exit;
  }
  $user = getUserById($_SESSION['userId']);
}

$pegawaiId = $user['id'];
$memberId = isset($_POST['member_id']) ? $_POST['member_id'] : null;
$metode = isset($_POST['metode']) ? $_POST['metode'] : null;
$telepon = isset($_POST['telepon']) ? $_POST['telepon'] : null;
$rekening = isset($_POST['rekening']) ? $_POST['rekening'] : null;
$status = isset($_POST['status']) ? $_POST['status'] : 'Proses';
$total = isset($_POST['total']) ? (int)$_POST['total'] : 0;

// create new order
$orderCreated = createOrders($pegawaiId, $memberId, $metode, $telepon, $rekening, $status, $total);

if (!$orderCreated) {
  $response = [
    'status' => 'error',
    'message' => 'Gagal menambahkan order'
  ];
  echo json_encode($response);
  return;
}

$order = getLastOrder($pegawaiId);

// create new detail_orders
$dataOrder = $_POST['data_order'];
$detailOrderCreated = createDetailOrders($order['id'], $dataOrder);

$response = [
  'status' => 'success',
  'message' => (strtolower($status) === 'lunas') ? 'Pembayaran berhasil' : 'Tagihan baru berhasil dibuat',
  'orderId' => $order['id']
];

$_SESSION['response'] = $response;

echo json_encode($response);
