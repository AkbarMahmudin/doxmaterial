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
      <h1>Ubah Pegawai</h1>

      <form action="" class="form">
        <label> Nama </label>
        <input type="text" name="nama" id="" class="form-control" />
        <label> Username </label>
        <input type="text" name="username" id="" class="form-control" />
        <label> Password </label>
        <input type="password" name="password" id="" class="form-control" />
        <label> Role </label>
        <select name="role" id="role" class="form-control"> 
            <option selected>Select role</option>
            <option value="cashier">cashier</option>
            <option value="admin">admin</option>
        </select>
        <label> Outlet </label>
        <select name="outlet" id="outlet" class="form-control"> 
            <option selected>Select outlet</option>
            <option value="Bandung">Bandung</option>
            <option value="Jakarta">Jakarta</option>
        </select>
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