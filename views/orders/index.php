<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
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
      <div class="container_table">
        <table class="table" id="myTable">
          <thead>
            <tr>
              <th>Menu</th>
              <th>ID</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Total</th>
              <th>Date</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012205</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>

            <tr>
              <td>Pizza</td>
              <td>DC - 01012204</td>
              <td>100.000</td>
              <td>2</td>
              <td>200.000</td>
              <td>26 March 2022</td>
            </tr>

            <tr>
              <td>Iced Coffe</td>
              <td>DC - 01012203</td>
              <td>30.000</td>
              <td>2</td>
              <td>60.000</td>
              <td>26 March 2022</td>
            </tr>

            <tr>
              <td>Toast</td>
              <td>DC - 01012202</td>
              <td>35.000</td>
              <td>2</td>
              <td>70.000</td>
              <td>26 March 2022</td>
            </tr>

            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
            <tr>
              <td>Hamburger</td>
              <td>DC - 01012201</td>
              <td>45.000</td>
              <td>2</td>
              <td>90.000</td>
              <td>26 March 2022</td>
            </tr>
          </tbody>
        </table>

        <!-- end container table -->
      </div>
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

  <!-- Jquery -->
  
  <?php
    include '../_includes/footer.php';
  ?>
  <!-- Paginate -->
  <!-- <script src="../../js/orders/paginate.js"></script> -->
  <script src="../../js/datatable.js"></script>
</body>

</html>