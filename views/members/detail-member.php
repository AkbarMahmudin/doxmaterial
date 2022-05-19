<?php
  include '../../controller/members/getMember.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
</head>

<body id="body-pd">
  <?php
  // $title = 'Members';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- start container members -->
    <div class="container">
      <h1>Detail Page Member</h1>
      <h3>Hai, <?= $member['nama_lengkap']; ?></h3>

      <form action="../../controller/members/coba-upload.php" method="post" enctype="multipart/form-data">
        <input type="file" placeholder="Pilih gambar" name="gambar">

        <button type="submit" name="submit">Kirim</button>
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