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

    <main>
        <div class="container">

            <div class="search-stok">
            <label class="form-label">Stok</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang" />
            <button type="submit" class="btn btn-primary" style="float:right;">Cari</button>
            </div>
            
            <div class="container_table">
                <table class="table" id="myTable" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </main>

    <?php
    include '../_includes/footer.php';
    ?>
</body>

</html>