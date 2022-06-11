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
            <p> <?= $employee['outlet_id']; ?> </p>
          </div>
        </a>
        <?php endforeach; ?>

    </div>
    <!-- end container-employees -->
  </main>
  <!-- End Content Body -->

  <?php
  include '../_includes/footer.php';
  ?>

</body>



</html>