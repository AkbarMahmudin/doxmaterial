<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/menu.css">

</head>
<body id="body-pd">

<?php
  $title = 'Menu';
  include '../_includes/side.php';
?>

    <!-- Content Boody -->
    <main class="container-menu">
      <!-- Coding disini -->
      <div class="menu">

        <section class="control">
          <!-- <button class="btn btn-secondary btn-filter"><i class="fa-solid fa-filter filter-icon"></i> Filter</button> -->

          <form class="form-search">
            <input type="text" id="input-search" class="input-search" placeholder="Cari menu">
            <button id="btn-search" class="btn btn-primary btn-search">Cari</button>
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
    <?php
      include '../_includes/footer.php';
    ?>
    <!-- Custom js -->
    <script src="../../js/menu-cashier/data.js"></script>
    <script src="../../js/menu-cashier/dom.js"></script>
    <script src="../../js/menu-cashier/index.js"></script>
    <script>
      const buttonNext = document.getElementById('btn-next');
      buttonNext.addEventListener('click', () => window.location.href = 'payment_menu-cashier.php');
    </script>
</body>

</html>