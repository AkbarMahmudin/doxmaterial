<?php
@include '../../model/Outlet.php';
$id = $_GET['id'];
$outlet = getOutletsById($id);
?>
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
    <div class="container" class="form">
      <!-- start add outlets -->
      <h1>Ubah Outlet</h1>

      <form action="../../controller/outlets/update.php" method="POST" class="form">

      <input type="hidden" name="id" value="<?= $outlet['id']; ?>">
      
        <label> Kota </label>
        <input type="text" name="kota" id="" class="form-control"  value="<?= $outlet['kota']; ?>" />
        <label> Alamat </label>
        <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"> <?= $outlet['alamat']; ?> </textarea>
        <label> Gambar </label>
        <input type="file" name="gambar" id="inputFile" class="form-control" />
        <div class="image-preview" id="imagePreview">
          <img class="image_preview" src="" alt="Image Preview" />
          <span class="image-preview_text">Image Preview</span>
        </div>

        <button type="button" class="btn" onclick="history.back()">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>

    <!-- end container add outlets -->
  </main>
  <!-- End Content Body -->

  <?php
    include '../_includes/footer.php';
  ?>

</body>

</html>