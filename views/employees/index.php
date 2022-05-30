<?php
  include '../../controller/employees/getEmployees.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/employees.css">

</head>

<body id="body-pd">

  <?php
  // $title = 'Employees';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- Coding disini -->

    <!-- wrap employees -->
    <div class="container">
      <!-- start button filter -->
      <!-- <div class="dropdown">
        <button class="btn btn-secondary filter-employees dropdown-btn">
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

     
      <!-- start wrap list employees -->
      <div class="list-employee">
        <a href="add-employees.php" class="card btn-add">
          <i class="fa-solid fa-circle-plus"></i>
          <!-- <div class="card-body">
              </div> -->
        </a>

         
        <!-- Employee pertama -->
        <?php foreach($employees as $employee) : ?>
        <div class="card employess">
          <img src="../../img/employee_img/employee (1).png" alt="Foto 1" class="img-card">
          <div class="card-body">
            <h3> <?= $employee['nama']; ?></h3>
            <p> <?= $employee['role']; ?> </p>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- employee kedua -->
        <!-- <div class="card">
          <img src="../../img/employee_img/employee (2).png" alt="Foto 2" class="img-card">
          <div class="card-body">
            <h3>Jerome Bell</h3>
            <p>as barista</p>
          </div>
        </div> -->

        <!-- employee ketiga -->
        <!-- <div class="card">
          <img src="../../img/employee_img/employee (3).png" alt="Foto 3" class="img-card">
          <div class="card-body">
            <h3>Kristin Watson</h3>
            <p>as waiter</p>
          </div>
        </div>

        <div class="card">
          <img src="../../img/employee_img/employee (4).png" alt="Foto 4" class="img-card">
          <div class="card-body">
            <h3>Jhon Doe</h3>
            <p>as cashier</p>
          </div>
        </div> -->

        <!-- employee kedua -->
        <!-- <div class="card">
          <img src="../../img/employee_img/employee (5).png" alt="Foto 5" class="img-card">
          <div class="card-body">
            <h3>Darrell Steward</h3>
            <p>as chef</p>
          </div>
        </div>
      </div> -->
      <!-- end wrap-list-employees -->

      <!-- button chat paradox help -->
      <!-- <div class="btn-chat">
        <a href="/pages/employees-add.html" class="action-btn">
          <i class="fa-solid fa-message fa-2x message-icon"></i>
        </a>
      </div> -->
      <!-- end button chat paradox help -->

    </div>
    <!-- end container-employees -->
  </main>
  <!-- End Content Body -->

  <?php
  include '../_includes/footer.php';
  ?>

  <?php if (isset($_GET['status']) && $_GET['status']==='succes'): ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Pegawai berhasil ditambahkan',
            })
        </script>
    <?php endif; ?>

</body>



</html>