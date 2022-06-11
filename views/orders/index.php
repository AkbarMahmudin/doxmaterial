<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <?php
  @include '../../model/DetailOrder.php';

  $outletId = $user['outlet_id'];

  if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
    $startDate = $_GET['start_date'];
    $endDate = $_GET['end_date'];
    $orders = getDetailOrders($outletId, $startDate, $endDate);
  } else {
    $orders = getDetailOrders($outletId);
  }
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
      <div class="option">
        <button class="btn btn-secondary btn-filter" onclick="showFilter()" title="Filter" style="padding: .75rem; margin-right: .5rem;"><i class="fa-solid fa-filter filter-icon"></i></button>
        <div class="dropdown">
          <button class="btn btn-secondary">Export</button>
          <div class="dropdown-content">
            <a href="#" onclick="exportToPdf('orders')">PDF</a>
            <a href="#" onclick="exportToCsv('orders')">Excel</a>
          </div>
        </div>
      </div>
      <!-- start wrap filter and date -->
      <form action="#" method="GET" class="wrap-filter-date" id="form-filter" style="display: none;">
        <input type="date" name="start_date" class="form-control" value="<?= !isset($_GET['start_date']) ? date("Y-m-d") : $_GET['start_date'];?>">
        
        <input type="date" name="end_date" class="form-control" value="<?= !isset($_GET['end_date']) ? date("Y-m-d") : $_GET['end_date'];?>">
        <button type="submit" class="btn btn-primary">Filter</button>
        <button type="button" class="btn btn-link" onclick="clearFilter()">Clear</button>
      </form>
      <!-- end wrap filter dan date-->


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
              <td><?= $order['nama_barang'] ?></td>
              <td><?= $order['orders_id'] ?></td>
              <td><?= $order['harga'] ?></td>
              <td><?= $order['jumlah'] ?></td>
              <td><?= $order['total'] ?></td>
              <td><?= $order['tgl_orders'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- end container orders -->
    </div>
  </main>
  <!-- End Content Body -->

  <!-- Import JS -->
  <?php
  include '../_includes/footer.php';
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../../js/orders/index.js"></script>
</body>

</html>