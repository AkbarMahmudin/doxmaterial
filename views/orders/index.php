<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <?php
  @include '../../model/DetailOrder.php';

  $orders = getDetailOrders($user['outlet_id']);
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/orders.css" />
</head>

<body id="body-pd">
  <?php
  // $title = 'Orders';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- Coding disini -->
    <!-- start container orders -->
    <div class="container">
      <!-- start wrap button filter and date -->
      <div class="wrap-filter-date">
        <!-- start button filter -->
        <div class="dropdown">
          <button class="btn btn-secondary filter-employees">
            <i class="fa-solid fa-filter filter-icon"></i>
            Filter
          </button>
          <div class="dropdown-content">
            <a href="../../pages/employees.html">Outlet Bandung I</a>
            <a href="#">Outlet Bandung II</a>
            <a href="#">Outlet Surabaya</a>
            <a href="#">Outlet Yogyakarta</a>
            <a href="#">Outlet Jakarta</a>
            <a href="#">Outlet Tasik</a>
            <a href="#">Outlet Bekasi</a>
            <a href="#">Outlet Garut</a>
          </div>
        </div>
        <!-- end button filter -->

        <!-- select date -->
        <!-- <form class="date-orders">
          <input type="date" name="date-orders" />
        </form> -->
      </div>
      <!-- end wrap button filter dan date-->

      <!-- orders table -->
      <!-- <div class="form-group">
        <select name="state" id="maxRows" class="form-control" style="width: 150px">
          <option value="5000">Show All</option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div> -->
      <table class="table" id="myTable" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Barang</th>
            <th>ID Order</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Date</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($orders as $key => $order) : ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><?= $order['nama'] ?></td>
              <td><?= $order['id'] ?></td>
              <td><?= $order['harga'] ?></td>
              <td><?= $order['jumlah'] ?></td>
              <td><?= $order['total'] ?></td>
              <td><?= $order['tanggal'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- <div class="pagination-container">
        <nav>
          <ul class="pagination"></ul>
        </nav>
      </div> -->
      <!-- end container orders -->
    </div>
  </main>
  <!-- End Content Body -->

  <!-- Import JS -->
  <?php
  include '../_includes/footer.php';
  ?>
</body>

</html>