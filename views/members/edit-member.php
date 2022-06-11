<?php

include '../../model/Member.php';

$id = $_GET['id']; // ambil nilai id pada url
$member = getMemberById($id);

?>

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
    <!-- start container orders -->
    <div class="container">
      <h1>Ubah Member</h1>

      <form action="../../controller/members/update.php" method="POST" class="form">
        <!-- elemen menampung id member -->
        <input type="hidden" name="id" value="<?= $member['id']; ?>">

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?= $member['nama_lengkap']; ?>">

        <label for="telepon">Telepon</label>
        <input type="tel" name="telepon" id="telepon" class="form-control" value="<?= $member['telepon']; ?>">

        <!-- pengecekan pad elemen radio | selected | checkbox -->
        <label style="display: block;">Jenis Kelamin</label>
        <label for="L">
          <input type="radio" name="jenis_kelamin" id="L" value="Laki-laki" <?= $member['jenis_kelamin'] === 'Laki-laki' ? 'checked' : '' ?>>
          Laki-laki
        </label>
        <label for="P">
          <input type="radio" name="jenis_kelamin" id="P" value="Perempuan" <?= $member['jenis_kelamin'] === 'Perempuan' ? 'checked' : '' ?>>
          Perempuan
        </label>

        <label for="alamat" style="display: block;">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"><?= $member['alamat']; ?>
        </textarea>

        <button type="button" class="btn" onclick="history.back()">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
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