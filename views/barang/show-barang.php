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

  // include show
  include '../../controller/barang/show.php';
?>

    <!-- Content Boody -->
    <main class="container">
      <!-- Coding disini -->
      <div class="show_barang">
      <div class="detail_barang">
        <div class="detail_img">
            <a href="index.php"class="btn btn-primary">< Kembali</a>
            <img src="<?= !$data['gambar'] ? '../../img/no-img.jpg' : '../../img/barang/'.$data['gambar']; ?>" alt="" />
        </div>
        <div class="detail_action">
            <h1> <?= $data['nama']; ?></h1>
            <h4 class="price">Rp. <?= $data['harga']; ?></h4>
            <div class="action">
                <a href="edit-barang.php?id=<?=$data['id'];?>" class="btn btn-secondary">Edit</a>
                <form action="../../controller/barang/delete.php"method="POST"style="display:inline-block">
                  <input name="id"type="hidden"value="<?=$data['id'];?>">
                  <input name="gambar"type="hidden"value="<?=$data['gambar'];?>">
                  <button class="btn btn-danger"type="submit"style="width:150px;">Hapus</button>
                </form>
            </div>
        </div>
      </div>

      <div class="stok_barang">
          <h1> Stok </h1>
          <div class="container_table">
            <table class="table" id="myTable" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Outlet</th>
                        <th>Jumlah Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_stok as $key => $row) {?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $row['alamat_outlet'];?></td>
                        <td><?= $row['jumlah'];?></td>
                        <td><a href="#"class="btn btn-secondary">Edit</a>
                            <a href="#"class="btn btn-danger">Hapus</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
          </div>
      </div>
      </div>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <?php
      include '../_includes/footer.php';
    ?>

</body>

</html>