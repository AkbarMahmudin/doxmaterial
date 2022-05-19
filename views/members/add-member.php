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
      <h1>Member Baru</h1>
    
      <form action="../../controller/members/create.php" method="POST" class="form">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>

        <label for="telepon">Telepon</label>
        <input type="text" name="telepon" id="telepon" class="form-control" required>

        <label style="display: block;">Jenis Kelamin</label>
        <label for="L">
          <input type="radio" name="jenis_kelamin" id="L" value="Laki-laki">
          Laki-laki
        </label>
        <label for="P">
          <input type="radio" name="jenis_kelamin" id="P" value="Perempuan">
          Perempuan
        </label>

        <label for="alamat" style="display: block;">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" required></textarea>

        <button type="button" class="btn" onclick="history.back()">Batal</button>
        <button type="submit" name="btn-submit" class="btn btn-primary">Simpan</button>
      </form>

    </div>
  </main>
  <!-- End Content Body -->

  <!-- Import JS -->
  <?php
    include '../_includes/footer.php';
  ?>
</body>

</html>