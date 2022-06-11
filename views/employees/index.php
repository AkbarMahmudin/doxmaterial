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

         
        <!-- Employee -->
        <?php foreach($employees as $employee) : ?>
        <a href="edit-employees.php?id=<?=$employee['id']?>" class="card employess">
        <img src="<?= !$employee['gambar'] ? '../../img/no-img.jpg' : '../../img/employees/'.$employee['gambar']; ?>" alt="" class="img-card">
          <div class="card-body">
            <h3> <?= $employee['nama']; ?></h3>
            <p> <?= $employee['role']; ?> </p>
          </div>
        </a>
        <?php endforeach; ?>

        

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

</body>



</html>