

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/dashboard.css">
</head>

<body id="body-pd">

  <!-- Sidebar -->

  <?php
  include '../_includes/side.php';

  include '../../controller/dashboard/getData.php';
  ?>

  <main class="container">
    <!-- 1 -->
    <div class="wrap">
      <div class="card">
        <div class="container_card">
          <i class="fa-solid fa-chart-simple logo_card"></i>
          <span class="title"><b>Dashboard</b> <br> <span class="detail">Analytical Dashboard</span></span>
        </div>
      </div>
    </div>
    <!-- 2 -->
    <div class="wrap">

      <div class="col_dashboard">
        <div class="card primary">
          <i class="fa-solid fa-hammer"></i>
          <div class="desc">
            <h4><b>Total Barang: <?= $dataTotal['jml_barang']; ?></b></h4>
          </div>
        </div>
      </div>

      <div class="col_dashboard">
        <div class="card secondary">
          <i class="fa-solid fa-shop"></i>
          <div class="desc">
            <h4><b>Total Outlet : <?= $dataTotal['jml_outlet']; ?></b></h4>

          </div>
        </div>
      </div>

      <div class="col_dashboard">
        <div class="card primary">
          <i class="fa-solid fa-pen-to-square"></i>
          <div class="desc">
            <h4><b>Total Order : <?= $dataTotal['jml_order']; ?></b></h4>
          </div>
        </div>
      </div>
      <div class="col_dashboard">
        <div class="card secondary">
          <i class="fa-solid fa-user-group"></i>
          <div class="desc">
            <h4><b>Total Karyawan : <?= $dataTotal['jml_pegawai']; ?></b></h4>
          </div>
        </div>
      </div>
    </div>
    <!-- 3 -->
    <div class="wrap">
      <div class="col left">
      <div class="card pd">
          <h3 style="padding-bottom: 3rem;">Today's Income</h3>
          <div class="daily">
            <h2>RP. <?= number_format($todayIncome['today_income'],0,",",".") ?></h3>
              <i class="fa-solid fa-money-bill-wave"></i>
          </div>
          <div class="garis">
            <hr>
          </div>
        </div>
      </div>

      <div class="col right">
        <div class="card pd">
          <h3 style="padding-bottom: 3rem;">This Month's Income</h3>
          <div class="daily">
            <h2>RP. <?= number_format($monthIncome['monthly_income'],0,",",".") ?></h3>
              <i class="fa-solid fa-money-bill-wave"></i>
          </div>
          <div class="garis">
            <hr>
          </div>
        </div>
    </div>
    
    <div class="card"style="padding : 1.5rem">
      <div class="title_left">
          <h3 class="recent">Recent Orders</h3>
          <a href="../orders/index.php"><button class="btn btn-primary">Show All</button></a>
        </div>
        <hr style="border :1px solid #C4C4C4;">
        <div class="container_table">
          <table style="text-align : center;"class="table" width="100%">
            <thead>
              <tr>
                <th style = "padding : 0.5rem;">Orders ID</th>
                <th>Nama Barang</td>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Tanggal</td>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($dataRecentOrders as $key => $row): ?>
              <tr>
                <td data-label="Menu"><?= $row['orders_id']; ?></td>
                <td data-label="Menu"><?= $row['nama_barang']; ?></td>
                <td data-label="Menu"><?= $row['harga']; ?></td>
                <td data-label="Menu"><?= $row['jumlah']; ?></td>
                <td data-label="Menu"><?= $row['total']; ?></td>
                <td data-label="Menu"><?= $row['tanggal']; ?></td>
                <td data-label="Menu"><?= $row['status']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      <div style="margin-top : 50px">
      <div class="title_left">
          <h3 class="recent">Barang Terlaris</h3>
        </div>
        <hr style="border :1px solid #C4C4C4;">
        <div class="container_table">
          <table class="table" style="text-align : center;">
            <thead>
              <tr>
                <th style = "padding : 0.5rem;">ID Barang</th>
                <th>Nama Barang</td>
                <th>Terjual</th>
                <th>Total</th>
                <th>Peringkat</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($dataPopularOrder as $key => $row): ?>
              <tr>
                <td data-label="Menu"><?= $row['barang_id']; ?></td>
                <td data-label="Menu"><?= $row['nama_barang']; ?></td>
                <td data-label="Menu"><?= $row['terjual']; ?></td>
                <td data-label="Menu"><?= $row['total']; ?></td>
                <td data-label="Menu"><?= $row['peringkat']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        </div>
    
      </div>
  </main>


  <?php
  include '../_includes/footer.php';
  ?>
</body>

</html>