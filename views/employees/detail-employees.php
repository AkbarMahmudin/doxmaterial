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
    <div class="container" >
        <div class="wrap-all" style="display:flex; flex-direction:row; width:100%;" >
            <div class="card" style="display:flex; margin:0 30px; width:25%; float-item:center; flex-direction:column; padding:20px;">
                <img src="../../img/logo.png" alt="">
                <h3>Jhon Doe</h3>
                <p>+625845682152</p>
                <p>Laki-laki</p>
                <p>Jl. Raya Rt01/96</p>
            </div>

            <div class="wrap-table" style="display:flex; flex-direction:column; width:100%;">
                <div class="container-table card" style="display:flex; flex-direction:column; width:90%; margin:0 30px 30px 30px; padding:20px;">
                    <h3>Riwayat Transaksi</h3>
                        <table class="table" id="employees_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jumlah Utang</th>
                                    <th>Terbayar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>                
                            <tbody>
                                <tr>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td><button type="submit" class="btn btn-primary">Lunas</button></td>
                                    <td><button type="submit" class="btn btn-secondary">Bayar</button></td>
                                </tr>
                                <tr>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td><button type="submit" class="btn btn-primary">Lunas</button></td>
                                    <td><button type="submit" class="btn btn-secondary">Bayar</button></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            

                <div class="container-table card" style="display:flex; flex-direction:column; width:90%; margin:0 30px; padding:20px;">
                    <h3>Riwayat Pembayaran Piutang</h3>
                        <table class="table" id="employees_table">
                            <thead>
                                <tr>
                                    <th>ID Piutang</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Sisa Utang</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>                
                            <tbody>
                                <tr>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td>bla</td>
                                </tr>
                                <tr>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td>bla</td>
                                    <td>bla</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
        </div>
        
                <!-- start wrap button filter and date -->
      <!-- <div class="wrap-filter-date"> -->
        <!-- start button filter -->
        <!-- <div class="dropdown">
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
        </div> -->
        <!-- end button filter -->

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