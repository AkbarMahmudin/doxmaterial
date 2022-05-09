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
      <h1>Edit Employees</h1>
      <form action="">
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
        <input type="file" name="gambar" id="" class="form-control" />
      </form>

      <a href="index.php"><button class="btn btn-primary">Save</button></a>

    </div>

    <!-- end container add outlets -->
  </main>
  <!-- End Content Body -->

  <?php
    include '../_includes/footer.php';
  ?>

</body>

</html>