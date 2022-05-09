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
    <div class="container">
      <!-- start add outlets -->
      <h1>Add Outlets</h1>
      <form action="">
        <label> Kota </label>
        <input type="text" name="kota" id="" class="form-control" />
        <label> Alamat </label>
        <input type="text" name="alamat" id="" class="form-control" />
        <label> Gambar </label>
        <input type="file" name="gambar" id="" class="form-control" />
      </form>
    </div>
    <a href="index.php"><button class="btn btn-primary">Add</button></a>

    <!-- end container add outlets -->
  </main>
  <!-- End Content Body -->

  <?php
    include '../_includes/footer.php';
  ?>

</body>

</html>