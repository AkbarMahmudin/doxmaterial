<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOX CAFFE | PoS</title>
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="icon" href="../../img/logo.png"type = "image/x-icon">
  <!-- Default style -->
  <link rel="stylesheet" href="../css/index.css">
  <!-- Custom Style -->
  <link rel="stylesheet" href="../css/outlet.css">

</head>
<body id="body-pd">

    <div class="wrap-top">
    <!-- Sidebar -->
      <div class="header_toggle"id="header">
        <button class="btn-toggle fa fa-bars"id="header-toggle">
        </button>
      </div>

      <div class="left-sidebar" id="side-bar">
        <nav class="nav">
          <div>
            <a href="index.html" class="nav_logo">
              <img src="../img/logo.png" alt=""class="nav_logo-icon">
            </a>
  
            
            <div class="padding-list">
              <div class="side-outlet">
                Jl. Buahbatu, Kec. Bandung
              </div>
            <div class="nav_list">
              <a href="/" class="nav_link">
                <i class="fa-solid fa-chart-simple nav_icon"></i>
                <span class="nav_name">Dashboard</span>
              </a>
              <a href="menu.html" class="nav_link">
                <i class="fa-solid fa-utensils nav_icon"></i>
                <span class="nav_name">Menus</span>
              </a>
              <a href="menu-cashier.html" class="nav_link">
                <i class="fa-solid fa-utensils nav_icon"></i>
                <span class="nav_name">Menus (Cashier)</span>
              </a>
              <a href="outlets.html" class="nav_link active">
                <i class="fa-solid fa-shop nav_icon"></i>
                <span class="nav_name">Outlets</span>
              </a>
              <a href="orders.html" class="nav_link">
                <i class="fa-solid fa-pen-to-square nav_icon"></i>
                <span class="nav_name">Orders</span>
              </a>
              <a href="employees.html" class="nav_link">
                <i class="fa-solid fa-user-group nav_icon"></i>
                <span class="nav_name">Employees</span>
              </a>
            </div>
            </div>
          </div>
          <div class="nav_bottom">
            <div class="nav_bottom-profil">
              <img src="../img/profil.png" alt="" class="profil_image">
              <span class="profil_name">John Doe <br> <span class="profil_role">Cashier</span></span>
              <button class="btn-logout nav_bottom-link fa-solid fa-right-from-bracket">
            </button>
            </div>
          </div>
        </nav>
      </div>
    <!-- End Sidebar -->

    <!-- title -->
    <h2 class="title">Outlets</h2>
    <!-- end title -->
    </div>

    <!-- Content Boody -->
    <main>
      <!-- Coding disini -->
          <!-- start wrap list outlets -->
          <div class="container-outlets">
              <!-- baris pertama outlets -->
              <div class="list-outlet">
                  <!-- outlet tambahan -->
                  <div class="card btn-add">
                    <i class="fa-solid fa-circle-plus"></i>
                    <!-- <div class="card-body">
                    </div> -->
                  </div>

                  <!-- outlet pertama -->
                  <div class="card">
                    <img src="../img/outlets_img/outlet-1.png" alt="Outlet 1" class="img-card">
                    <div class="card-body">
                      <h3>Bandung</h3>
                      <p>Jl. Melong</p>
                    </div>
                  </div>

                  <!-- outlet kedua -->
                  <div class="card">
                    <img src="../img/outlets_img/outlet-2.png" alt="Outlet 2" class="img-card">
                    <div class="card-body">
                      <h3>Bandung</h3>
                      <p>Jl. Buah Batu</p>
                    </div>
                  </div>

                  <!-- outlet ketiga -->
                  <div class="card">
                      <img src="../img/outlets_img/outlet-3.png" alt="Outlet 3" class="img-card">
                      <div class="card-body">
                        <h3>Jakarta</h3>
                        <p>Jl. K.H Mas Mansur</p>
                      </div>
                  </div>

                  <!-- outlet keempat -->
                  <div class="card">
                    <img src="../img/outlets_img/outlet-4.png" alt="Outlet 4" class="img-card">
                    <div class="card-body">
                      <h3>Surabaya</h3>
                      <p>Jl. Siwalankerto</p>
                    </div>
                  </div>

                  <!-- outlet kelima -->
                  <div class="card">
                    <img src="../img/outlets_img/outlet-5.png" alt="Outlet 5" class="img-card">
                    <div class="card-body">
                      <h3>Tasikmalaya</h3>
                      <p>Jl. Seladarma</p>
                    </div>
                  </div>

                  <!-- outlet keenam -->
                  <div class="card">
                    <img src="../img/outlets_img/outlet-6.png" alt="Outlet 6" class="img-card">
                    <div class="card-body">
                      <h3>Yogyakarta</h3>
                      <p>Jl. Laksda Adisucipto</p>
                    </div>
                  </div>

                  <!-- outlet ketujuh -->
                  <div class="card">
                    <img src="../img/outlets_img/outlet-7.png" alt="Outlet 7" class="img-card">
                    <div class="card-body">
                      <h3>Garut</h3>
                      <p>Jl. Cipanas</p>
                    </div>
                  </div>

                  <!-- outlet kedelapan -->
                  <div class="card">
                    <img src="../img/outlets_img/outlet-8.png" alt="Outlet 8" class="img-card">
                    <div class="card-body">
                      <h3>Bekasi</h3>
                      <p>Jl. Akasia</p>
                    </div>
                  </div>

              </div>
              <!-- end baris pertama outlets -->

          </div>
          <!-- end wrap list outlets -->
      
      <!-- end container outlets -->
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <script src="https://kit.fontawesome.com/94fce472e4.js" crossorigin="anonymous"></script>
    <!-- Default js -->
    <script src="../js/index.js"></script>
    <!-- Custom js -->
    <script src="../js/custom.js"></script>
    
</body>

</html>