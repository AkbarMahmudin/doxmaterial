<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
</head>

<body id="body-pd">
  <?php
  // $title = 'Members';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- start container members -->
    <div class="container">
      <!-- members table -->
      <div class="form-group">
        <select name="state" id="maxRows" class="form-control" style="width: 150px">
          <option value="5000">Show All</option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div>

      <div class="container_table">
        <table class="table" id="pager">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Jhon Doe</td>
              <td>L</td>
              <td>62888888889</td>
              <td>Jl. Kaki</td>
              <td class="col-action">
                <a href="#" class="btn btn-secondary" style="margin: 2px;">Edit</a>
                <a href="#" class="btn btn-danger" style="margin: 2px;">Hapus</a>
              </td>
            </tr>

          </tbody>
        </table>

      </div>
      
      <div class="pagination-container">
        <nav>
          <ul class="pagination"></ul>
        </nav>
      </div>
      <a href="add-member.php" class="btn btn-primary btn-block">
        <i class="fa-solid fa-plus"></i>  
        Buat Member Baru
      </a>
      <!-- end container members -->
    </div>
  </main>
  <!-- End Content Body -->

  <!-- Import JS -->

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <?php
    include '../_includes/footer.php';
  ?>
  <!-- Paginate -->
  <script src="../../js/orders/paginate.js"></script>
</body>

</html>