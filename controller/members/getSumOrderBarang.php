<?php

include '../../model/DetailOrder.php';

$memberId = $_GET['memberId'];

$order = getSumOrderBarang($memberId);

if (!$order) {
  $response = [
    'status' => 'error',
    'message' => 'Error',
  ];
  echo json_encode($response);
  return;
}

$response = [
  'status' => 'success',
  'data' => $order,
];

echo json_encode($response);
