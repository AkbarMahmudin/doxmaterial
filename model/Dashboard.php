<?php

include dirname(__DIR__) . '/config/db.php';

function showTotal(){
    $query = "SELECT
    (SELECT COUNT(*) FROM barang) AS jml_barang ,
    (SELECT COUNT(*) FROM outlet) AS jml_outlet ,
    (SELECT COUNT(*) FROM log_orders) AS jml_order ,
    (SELECT COUNT(*)  FROM pegawai) AS jml_pegawai";

    $result = mysqli_query($GLOBALS['DB'], $query);
        
    return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}

function recentOrders(){
    $query = "SELECT orders_id, nama_barang, harga, jumlah, total, DATE_FORMAT(tgl_orders,'%d-%M-%Y :%H:%i') AS tanggal, status FROM log_orders ORDER BY tgl_orders DESC LIMIT 5;";
    $result = mysqli_query($GLOBALS['DB'], $query);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row; 
    }

    return $data;
}

function todayIncome(){
    $query = "SELECT today_income() AS today_income";
    $result = mysqli_query($GLOBALS['DB'],$query);

    return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}

function monthlyIncome(){
    $query = "SELECT month_income() AS monthly_income";
    $result = mysqli_query($GLOBALS['DB'],$query);

    return mysqli_num_rows($result) > 0
    ? mysqli_fetch_assoc($result)
    : false;
}

function popularOrder(){
    $query = "SELECT barang_id, nama_barang, SUM(jumlah) AS terjual, SUM(total) AS total, DENSE_RANK() OVER(ORDER BY terjual DESC) peringkat FROM log_orders GROUP BY barang_id  ORDER BY peringkat LIMIT 10;";
    $result = mysqli_query($GLOBALS['DB'], $query);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row; 
    }

    return $data;
}
?>