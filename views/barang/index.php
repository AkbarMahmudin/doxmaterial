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

  // include view
  include '../../controller/barang/view.php';
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
         
          <?php 
          // foreach
          foreach($datas as $row){ 
          ?>
          <article class="card hover">
            <img src="gambar/<?= $row['gambar']; ?>" alt="" class="img-card">
            <div class="card-body">
              <h2><?= $row['nama']; ?></h2>
              <h4 class="price">Rp. <?= $row['harga']; ?></h4>
            </div>
          </article>
          <?php 
          } ?>
        </section>
      </div>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <?php
      include '../_includes/footer.php';
    ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'success'): ?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Data Baru udah Ditambah!',
    })
</script>
    <?php endif; ?>
</body>

</html>