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
  <link rel="stylesheet" href="../css/menu.css">

</head>
<body id="body-pd">

<!-- Sidebar -->
  <div class="wrap-top">
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
            <a href="menu-cashier.html" class="nav_link active">
              <i class="fa-solid fa-utensils nav_icon"></i>
              <span class="nav_name">Menus (Cashier)</span>
            </a>
            <a href="outlets.html" class="nav_link">
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

    <!-- title -->
    <h2 class="title">Menus - Cashier</h2>
    <!-- end title -->
  </div>
<!-- End Sidebar -->

    <!-- Content Boody -->
    <main class="container-menu">
      <!-- Coding disini -->
      <div class="menu">

        <section class="control">
          <button class="btn btn-secondary btn-filter"><i class="fa-solid fa-filter filter-icon"></i> Filter</button>

          <form class="form-search">
            <input type="text" class="input-search" placeholder="Cari menu">
            <button class="btn btn-primary btn-search">Cari</button>
          </form>
        </section>

        <section class="content" id="content">  
        </section>

      </div>

      <aside class="cart card">
        <div class="cart-body" id="cart-container">
          <h1>Menu yang dipilih</h1>
          <div class="cart-list"></div>
        </div>

        <div class="cart-footer">
          <div class="detail-order">
            <h3>Total:</h3>
            <h3 id="total-harga">0</h3>
          </div>
          <button class="btn btn-primary btn-block" id="btn-next" disabled>Lanjut Bayar</button>
        </div>
      </aside>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <script src="https://kit.fontawesome.com/94fce472e4.js" crossorigin="anonymous"></script>
    <!-- Default js -->
    <script src="../js/index.js"></script>
    <!-- Custom js -->
    <script src="../js/menu-cashier/data.js"></script>
    <script src="../js/menu-cashier/dom.js"></script>
    <script src="../js/menu-cashier/index.js"></script>
</body>

</html>