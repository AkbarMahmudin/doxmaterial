<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/orders.css" />
</head>

<body id="body-pd">
  <?php
  // $title = 'Orders';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- Coding disini -->
    <!-- start container orders -->
    <div class="container">
      <h1>Ubah Member</h1>
    
      <form action="" class="form">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control">

        <label for="telepon">Telepon</label>
        <input type="text" name="telepon" id="telepon" class="form-control">

        <label style="display: block;">Jenis Kelamin</label>
        <label for="L">
          <input type="radio" name="jenis_kelamin" id="L" value="L">
          Laki-laki
        </label>
        <label for="P">
          <input type="radio" name="jenis_kelamin" id="P" value="P">
          Perempuan
        </label>

        <label for="alamat" style="display: block;">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"></textarea>

        <button type="button" class="btn" onclick="history.back()">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>

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