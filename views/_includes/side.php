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
          <div class="side-outlet"></div>
          <div class="nav_list">
            <?php if ($user['role'] === 'admin') : ?>

              <a href="../../views/dashboard" class="nav_link
              <?= strpos($_SERVER['REQUEST_URI'], 'dashboard') !== false ? 'active' : '' ?>
              ">
                <i class="fa-solid fa-chart-simple nav_icon"></i>
                <span class="nav_name">Dashboard</span>
              </a>
              <a href="../../views/barang" class="nav_link
              <?= strpos($_SERVER['REQUEST_URI'], 'barang') !== false ? 'active' : '' ?>
              ">
              <i class="fa-solid fa-hammer"></i>
                <span class="nav_name">Barang</span>
              </a>
              <a href="../../views/outlets" class="nav_link
              <?= strpos($_SERVER['REQUEST_URI'], 'outlets') !== false ? 'active' : '' ?>
              ">
                <i class="fa-solid fa-shop nav_icon"></i>
                <span class="nav_name">Outlet</span>
              </a>
              <a href="../../views/employees" class="nav_link
              <?= strpos($_SERVER['REQUEST_URI'], 'employees') !== false ? 'active' : '' ?>
              ">
                <i class="fa-solid fa-user-group nav_icon"></i>
                <span class="nav_name">Pegawai</span>
              </a>

            <?php endif; ?>

            <?php if ($user['role'] === 'kasir') : ?>

              <a href="../../views/menu-cashier" class="nav_link
            <?=
              strpos($_SERVER['REQUEST_URI'], 'menu-cashier') !== false ||
                strpos($_SERVER['REQUEST_URI'], 'payment_menu-cashier.php') !== false ||
                strpos($_SERVER['REQUEST_URI'], 'invoice.php') !== false
                ? 'active' : '' ?>
            ">
                <i class="fa-solid fa-warehouse nav_icon"></i>
                <span class="nav_name">Menu</span>
              </a>

            <?php endif; ?>

            <a href="../../views/members" class="nav_link
              <?= strpos($_SERVER['REQUEST_URI'], 'members') !== false ? 'active' : '' ?>
              ">
              <i class="fa-solid fa-address-card nav_icon"></i>
              <span class="nav_name">Member</span>
            </a>
            <a href="../../views/orders" class="nav_link
              <?= strpos($_SERVER['REQUEST_URI'], 'orders') !== false ? 'active' : '' ?>
              ">
              <i class="fa-solid fa-pen-to-square nav_icon"></i>
              <span class="nav_name">Order</span>
            </a>
          </div>
        </div>
      </div>
      <div class="nav_bottom">
        <div class="nav_bottom-profil">
          <img src="../../img/profil.png" alt="Foto Profil" class="profil_image" />
           <span class="profil_name"><?= $user['username']; ?><br />
            <span class="profil_role"><?= $user['role']; ?></span></span>
          <form action="../../controller/users/logout.php" method="post">
            <button type="submit" class="btn-logout nav_bottom-link fa-solid fa-right-from-bracket" title="Logout"></button>
          </form>
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