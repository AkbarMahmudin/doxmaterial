<?php

include '../../model/Dashboard.php';

$dataTotal = showTotal();
$dataRecentOrders = recentOrders();
$todayIncome = todayIncome();
$monthIncome = monthlyIncome();
$dataPopularOrder = popularOrder();
?>