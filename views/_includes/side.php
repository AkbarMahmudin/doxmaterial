<!-- wrap sidebar + title -->
<div class="wrap-top">
  <!-- Sidebar -->
  <div class="header_toggle" id="header">
    <button class="btn-toggle fa fa-bars" id="header-toggle"></button>
  </div>

  <div class="left-sidebar" id="side-bar">
    <nav class="nav">
      <div>
        <a href="../../index.php" class="nav_logo">
          <img src="../../img/logo.png" alt="" class="nav_logo-icon" />
        </a>

        <div class="padding-list">
          <div class="side-outlet">Jl. Buahbatu, Kec. Bandung</div>
          <div class="nav_list">
            <a href="../../views/dashboard" class="nav_link
            <?= strpos($_SERVER['REQUEST_URI'], 'dashboard') !== false ? 'active' : '' ?>
            ">
              <i class="fa-solid fa-chart-simple nav_icon"></i>
              <span class="nav_name">Dashboard</span>
            </a>
            <a href="../../views/menus" class="nav_link
            <?= strpos($_SERVER['REQUEST_URI'], 'menus') !== false ? 'active' : '' ?>
            ">
              <i class="fa-solid fa-utensils nav_icon"></i>
              <span class="nav_name">Menus</span>
            </a>
            <a href="../../views/menu-cashier" class="nav_link
            <?=
            strpos($_SERVER['REQUEST_URI'], 'menu-cashier') !== false ||
              strpos($_SERVER['REQUEST_URI'], 'payment_menu-cashier.php') !== false ||
              strpos($_SERVER['REQUEST_URI'], 'invoice.php') !== false
              ? 'active' : '' ?>
            ">
              <i class="fa-solid fa-utensils nav_icon"></i>
              <span class="nav_name">Menus (Cashier)</span>
            </a>
            <a href="../../views/outlets" class="nav_link
            <?= strpos($_SERVER['REQUEST_URI'], 'outlets') !== false ? 'active' : '' ?>
            ">
              <i class="fa-solid fa-shop nav_icon"></i>
              <span class="nav_name">Outlets</span>
            </a>
            <a href="../../views/orders" class="nav_link
            <?= strpos($_SERVER['REQUEST_URI'], 'orders') !== false ? 'active' : '' ?>
            ">
              <i class="fa-solid fa-pen-to-square nav_icon"></i>
              <span class="nav_name">Orders</span>
            </a>
            <a href="../../views/employee" class="nav_link
            <?= strpos($_SERVER['REQUEST_URI'], 'employees') !== false ? 'active' : '' ?>
            ">
              <i class="fa-solid fa-user-group nav_icon"></i>
              <span class="nav_name">Employees</span>
            </a>
          </div>
        </div>
      </div>
      <div class="nav_bottom">
        <div class="nav_bottom-profil">
          <img src="../../img/profil.png" alt="" class="profil_image" />
          <span class="profil_name">John Doe <br />
            <span class="profil_role">Cashier</span></span>
          <button class="btn-logout nav_bottom-link fa-solid fa-right-from-bracket"></button>
        </div>
      </div>
    </nav>
  </div>
  <!-- End Sidebar -->

  <!-- title -->
  <h2 class="title"></h2>
  <!-- end title -->

  <!-- end wrap sidebar + title -->
</div>