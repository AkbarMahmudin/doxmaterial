<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/outlet.css">

</head>

<body id="body-pd">

  <?php
  // $title = 'Outlets';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- Coding disini -->
    <!-- start wrap list outlets -->
    <div class="container">
      <!-- baris pertama outlets -->
      <div class="list-outlet">
        <!-- outlet tambahan -->
        <a href='add-outlets.php' class="card btn-add">
          <i class="fa-solid fa-circle-plus"></i>
          <!-- <div class="card-body">
                    </div> -->
        </a>
        <!-- outlet pertama -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-1.png" alt="Outlet 1" class="img-card">
          <div class="card-body">
            <h3>Bandung</h3>
            <p>Jl. Melong</p>
          </div>
        </div>

        <!-- outlet kedua -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-2.png" alt="Outlet 2" class="img-card">
          <div class="card-body">
            <h3>Bandung</h3>
            <p>Jl. Buah Batu</p>
          </div>
        </div>

        <!-- outlet ketiga -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-3.png" alt="Outlet 3" class="img-card">
          <div class="card-body">
            <h3>Jakarta</h3>
            <p>Jl. K.H Mas Mansur</p>
          </div>
        </div>

        <!-- outlet keempat -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-4.png" alt="Outlet 4" class="img-card">
          <div class="card-body">
            <h3>Surabaya</h3>
            <p>Jl. Siwalankerto</p>
          </div>
        </div>

        <!-- outlet kelima -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-5.png" alt="Outlet 5" class="img-card">
          <div class="card-body">
            <h3>Tasikmalaya</h3>
            <p>Jl. Seladarma</p>
          </div>
        </div>

        <!-- outlet keenam -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-6.png" alt="Outlet 6" class="img-card">
          <div class="card-body">
            <h3>Yogyakarta</h3>
            <p>Jl. Laksda Adisucipto</p>
          </div>
        </div>

        <!-- outlet ketujuh -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-7.png" alt="Outlet 7" class="img-card">
          <div class="card-body">
            <h3>Garut</h3>
            <p>Jl. Cipanas</p>
          </div>
        </div>

        <!-- outlet kedelapan -->
        <div class="card">
          <img src="../../img/outlets_img/outlet-8.png" alt="Outlet 8" class="img-card">
          <div class="card-body">
            <h3>Bekasi</h3>
            <p>Jl. Akasia</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end wrap list outlets -->

    <!-- end container outlets -->
  </main>
  <!-- End Content Body -->

  <?php
    include '../_includes/footer.php';
  ?>

</body>

</html>