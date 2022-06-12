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
<?php
// var_dump($data_outlet);
// if (empty($data_outlet)){
//   echo "kosong";
// }
// else {
//   echo "ada";
// }
// exit;
?>

    <!-- Content Boody -->
    <main class="container">
      <!-- Coding disini -->
      <div class="show_barang">
        <div class="detail_barang">
          <div class="detail_img">
              <a href="index.php"class="btn btn-primary" title="Kembali"><i class="fa-solid fa-angle-left"></i></a>
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
                          <td>
                            <span><?= $row['jumlah'];?></span>
                            <form action="../../controller/barang/editstok.php" method="POST" style="display: none;">
                              <input type="hidden"name="idbrg"value="<?= $data['id'];?>" />
                              <input type="hidden"name="idstok"value="<?= $row['id'];?>" />
                              <input type="number"min="1" name="stok" id="stock"class="form-control" style="width: 70px; text-align: center; padding: .5rem 12px; margin: auto 0;">
                              <button type="submit" hidden></button>
                            </form>
                          </td>
                          <td>
                            <button type="button" class="btn btn-secondary" onclick="editStok(this)" style="margin-right: .5rem;">Ubah</button>
                            <form action="../../controller/barang/deletestok.php"method="POST"style="display:inline-block;">
                              <input type="hidden"name="idbrg"value="<?= $data['id'];?>" />
                              <input type="hidden"name="idstok"value="<?= $row['id'];?>" />
                            <button type="submit" id="btn-delete" class="btn btn-danger">Hapus</button>
                            </form>
                            <button type="button" id="btn-save" class="btn btn-primary" style="display: none;" onclick="updateStok(this)">Simpan</button>
                          </td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>

              <button class="btn btn-primary btn-block"id="tambahStok"onclick="addStok(this)" style="margin-top: 1rem;">Tambah Stok</button>
              <div class="add-stok"id="formStok">
                <form action="../../controller/barang/addstok.php" method="POST" class="form card" enctype="multipart/form-data"style="padding:1rem"> 
                  <input type="hidden"name="idbrg"value="<?= $data['id'];?>">
                  <label for="nama"> Pilih Outlet </label>
                  <select name="outlet" id=""class="form-control"required>
                  <?php foreach ($data_outlet as $key => $row) {?>
                    <option value="<?= $row['id_outlet'];?>"><?= $row['alamat_outlet']; ?></option>
                    <?php } ?>
                  </select>
                  <label for="stok"> Jumlah Stok </label>
                  <input type="number" name="stock" class="form-control" required />

                  <button type="submit" class="btn btn-primary">Tambah</button>

                </form>
              </div>
            </div>
        </div>
      </div>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->
    <?php
      include '../_includes/footer.php';
    ?>
    <script src="../../js/barang/index.js"></script>

</body>

</html>