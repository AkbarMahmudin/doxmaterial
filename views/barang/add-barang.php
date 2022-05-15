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

  // include getkodebarang dari controller
  include '../../controller/barang/store.php';
?>

    <!-- Content Boody -->
    <main class="container">
      <!-- Coding disini -->
      <h1>Barang Baru</h1>

      <form action="../../controller/barang/store.php" method="POST" class="form" enctype="multipart/form-data"> 

      <label for="nama"> ID Barang </label>
      <input type="text" name="id" class="form-control" value="<?php echo $kodeBarang ?>" readonly /> 
      <!-- <input type="text" name="id" class="form-control" value=""  />  -->

      <label for="nama"> Nama Barang </label>
      <input type="text" name="nama" id="nama"class="form-control" required /> 

      <label for="harga"> Harga </label>
      <input type="number" name="harga" id="harga" class="form-control" required />

      <label for="GambarBarang"> Gambar Barang</label>
      <input type="file" name="gambar" id="inputFile" class="form-control"required />

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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'fail'): ?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Fail',
        text: 'Ekstensi yang Diperbolehkan Hanya (JPG, PNG, JPEG)!',
    })
    </script>
    <?php endif; ?>
</body>

</html>