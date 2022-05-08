<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include '../_includes/header.php'
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/menu.css">

</head>
<body id="body-pd">

<?php
  // $title = 'Menu';
  include '../_includes/side.php';
?>

    <!-- Content Boody -->
    <main class="container">
      <!-- Coding disini -->
      <div class="menu">

        <section class="control">
          <button class="btn btn-secondary btn-filter"><i class="fa-solid fa-filter filter-icon"></i> Filter</button>

          <form class="form-search">
            <input type="text" class="input-search" placeholder="Cari menu">
            <button class="btn btn-primary btn-search">Cari</button>
          </form>
        </section>

        <section class="content">
         
          <a class="card btn-add" href="add-barang.php">
            <i class="fa-solid fa-circle-plus"></i>
            <!-- <div class="card-body">
            </div> -->
          </a>
         
          
          <article class="card">
            <img src="../../img/menu/1.png" alt="" class="img-card">
            <div class="card-body">
              <h2>Hamburger</h2>
              <h4 class="price">Rp. 45.000</h4>
              <p class="stock">Stok: 5</p>
            </div>
          </article>

          <article class="card">
            <img src="../../img/menu/2.png" alt="" class="img-card">
            <div class="card-body">
              <h2>Toast</h2>
              <h4 class="price">Rp. 35.000</h4>
              <p class="stock">Stok: 5</p>
            </div>
          </article>
          
          <article class="card">
            <img src="../../img/menu/3.png" alt="" class="img-card">
            <div class="card-body">
              <h2>Pizza</h2>
              <h4 class="price">Rp. 100.000</h4>
              <p class="stock">Stok: 5</p>
            </div>
          </article>
          
          <article class="card">
            <img src="../../img/menu/4.png" alt="" class="img-card">
            <div class="card-body">
              <h2>Steak</h2>
              <h4 class="price">Rp. 150.000</h4>
              <p class="stock">Stok: 5</p>
            </div>
          </article>

          <article class="card">
            <img src="../../img/menu/5.png" alt="" class="img-card">
            <div class="card-body">
              <h2>Iced Coffe</h2>
              <h4 class="price">Rp. 30.000</h4>
              <p class="stock">Stok: 5</p>
            </div>
          </article>
        </section>
      </div>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <?php
      include '../_includes/footer.php';
    ?>

</body>

</html>