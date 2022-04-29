

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
          <i class="fa-solid fa-utensils"></i>
          <div class="desc">
            <h4><b>Total Menu: 20</b></h4>
          </div>
        </div>
      </div>

      <div class="col_dashboard">
        <div class="card secondary">
          <i class="fa-solid fa-shop"></i>
          <div class="desc">
            <h4><b>Total Outlet : 5</b></h4>

          </div>
        </div>
      </div>

      <div class="col_dashboard">
        <div class="card primary">
          <i class="fa-solid fa-pen-to-square"></i>
          <div class="desc">
            <h4><b>Total Order : 10</b></h4>
          </div>
        </div>
      </div>
      <div class="col_dashboard">
        <div class="card secondary">
          <i class="fa-solid fa-user-group"></i>
          <div class="desc">
            <h4><b>Total Karyawan : 10</b></h4>
          </div>
        </div>
      </div>
    </div>
    <!-- 3 -->
    <div class="wrap">
      <div class="card col left">
        <div class="title_left">
          <h3 class="recent">Recent Orders</h3>
          <a href="pages/orders.html"><button class="btn btn-primary">Show All</button></a>
        </div>
        <hr style="border :1px solid #C4C4C4;">
        <div class="container_table">
          <table class="table">
            <thead>
              <tr>
                <th>Menu</th>
                <th>ID</td>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</td>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td data-label="Menu">Hamburger</td>
                <td data-label="ID">DC-120938721</td>
                <td data-label="Price">20.000</td>
                <td data-label="Qty">2</td>
                <td data-label="Total">40.000</td>
                <td data-label="Date">26 March 2022</td>
              </tr>

              <tr>
                <td data-label="Menu">Hamburger</td>
                <td data-label="ID">DC-120938721</td>
                <td data-label="Price">20.000</td>
                <td data-label="Qty">2</td>
                <td data-label="Total">40.000</td>
                <td data-label="Date">26 March 2022</td>
              </tr>

              <tr>
                <td data-label="Menu">Hamburger</td>
                <td data-label="ID">DC-120938721</td>
                <td data-label="Price">20.000</td>
                <td data-label="Qty">2</td>
                <td data-label="Total">40.000</td>
                <td data-label="Date">26 March 2022</td>
              </tr>

              <tr>
                <td data-label="Menu">Hamburger</td>
                <td data-label="ID">DC-120938721</td>
                <td data-label="Price">20.000</td>
                <td data-label="Qty">2</td>
                <td data-label="Total">40.000</td>
                <td data-label="Date">26 March 2022</td>
              </tr>

              <tr>
                <td data-label="Menu">Hamburger</td>
                <td data-label="ID">DC-120938721</td>
                <td data-label="Price">20.000</td>
                <td data-label="Qty">2</td>
                <td data-label="Total">40.000</td>
                <td data-label="Date">26 March 2022</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="col right">
        <div class="card pd">
          <h3 style="padding-bottom: 3rem;">Today's Income</h3>
          <div class="daily">
            <h2>RP.3.200.000</h3>
              <i class="fa-solid fa-money-bill-wave"></i>
          </div>
          <div class="garis">
            <hr>
          </div>
        </div>

        <div class="card pd">
          <h3 style="padding-bottom: 3rem;">This Month's Income</h3>
          <div class="daily">
            <h2>RP.20.200.000</h3>
              <i class="fa-solid fa-money-bill-wave"></i>
          </div>
          <div class="garis">
            <hr>
          </div>
        </div>
      </div>
    </div>
  </main>


  <?php
  include '../_includes/footer.php';
  ?>
</body>

</html>