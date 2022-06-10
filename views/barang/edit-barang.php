<?php

include '../../model/Barang.php';

$id = $_GET['id']; // ambil nilai id pada url
$barang = show($id);

?>

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
      <h1>Ubah Barang</h1>

      <!-- Coding disini -->
      <form action="../../controller/barang/update.php" method="POST"enctype="multipart/form-data" class="form"> 
      <input type="hidden"name="id"value="<?=$barang['id'];?>">
      <label for="nama"> Nama Barang </label>
      <input type="text" name="nama" id="nama"class="form-control"value="<?=$barang['nama'];?>" required /> 

      <label for="harga"> Harga </label>
      <input type="number" name="harga" id="harga" class="form-control"value="<?=$barang['harga'];?>" required />
      <input type="hidden"name="file_gambar"value="<?=$barang['gambar'];?>">
      <label for="GambarBarang"> Gambar Barang</label>
      <img src="../../img/barang/<?=$barang['gambar'];?>" alt=""style="display:block;width:450px;height:300px;margin-bottom:1rem;">
      <input type="file" name="gambar" id="inputFile"class="form-control" />
      <i style="color:red;">*Abaikan jika tidak ingin mengubah gambar</i>
      <div class="image-preview" id="imagePreview">
          <img class="image_preview" src="" alt="Image Preview" />
          <span class="image-preview_text">Image Preview</span>
      </div>

      <button type="button" class="btn" onclick="history.back()">Batal</button>
      <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <?php
      include '../_includes/footer.php';
    ?>


</body>

</html>