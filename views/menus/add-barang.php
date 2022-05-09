<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include '../_includes/header.php'
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/menu.css">

</head>
<body id="body-pd">

<?php
  // $title = 'Menu';
  include '../_includes/side.php';
?>

    <!-- Content Boody -->
    <main class="container">
      <!-- Coding disini -->
      <form action=""method=""> 
      <label for="nama"> Nama Barang </label>
      <input type="text" name="nama" id="nama"class="form-control" required /> 

      <label for="harga"> Harga </label>
      <input type="number" name="harga" id="harga" class="form-control" required />

      <label for="stok"> Stok </label>
      <input type="number" name="stok" id="stok" class="form-control" required />

      <label for="GambarBarang"> Gambar Barang</label>
      <input type="file" name="gambar" id="inputFile" class="form-control"required />

      <div class="image-preview" id="imagePreview">
          <img class="image_preview" src="" alt="Image Preview" />
          <span class="image-preview_text">Image Preview</span>
      </div>

      <button type="submit" class="btn btn-primary btn-block"style="margin-top:10px">Tambah</button>

      </form>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <?php
      include '../_includes/footer.php';
    ?>


</body>

</html>