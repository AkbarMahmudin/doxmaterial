<?php
include '../../controller/members/getMember.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <link rel="stylesheet" href="../../css/member.css">
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
      <div class="card">
        <div class="card-body">
          <div class="profile-member">
            <div class="profile-image"><?= substr($member['nama_lengkap'], 0, 1) ?></div>
            <div class="profile-detail">
              <h3><?= $member['nama_lengkap'] ?></h3>
              <span><?= $member['id'] ?></span>
            </div>
          </div>
        </div>
      </div>

      <div class="riwayat-order">
        <div class="grafik">
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div class="detail-order">
          <div class="card">
            <div class="card-body">
              <h2>Riwayat Order</h2>

              <table class="table" id="table-order" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Order</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($detailOrder as $key => $detail) : ?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $detail['id'] ?></td>
                      <td><?= $detail['nama'] ?></td>
                      <td><?= $detail['jumlah'] ?></td>
                      <td><?= $detail['total'] ?></td>
                      <td><?= $detail['tanggal'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="piutang">
        <div class="detail-piutang">
          <div class="card">
            <div class="card-body">
              <h2>Tagihan</h2>

              <table class="table" id="table-order" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Order</th>
                    <th>Sisa</th>
                    <th>Terbayar</th>
                    <th width="30%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($detailTagihan as $key => $tagihan) : ?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $tagihan['orders_id'] ?></td>
                      <td><?= $tagihan['jumlah_utang'] ?></td>
                      <td><?= $tagihan['terbayar'] ?></td>
                      <td width="30%" style="text-align: center;">
                        <button type="button" id="btn-bayar" class="btn btn-secondary" onclick="actBayar(this)">Bayar</button>
                        <form method="POST" action="../../controller/members/updateTagihan.php?id=<?= $_GET['id'] ?>" id="form-bayar" style="display: none;">
                          <input type="hidden" name="piutang_id" value="<?= $tagihan['id'] ?>">
                          <input type="number" class="form-control" name="nominal" id="nominal" style="display: inline-block; width: 70%;" placeholder="Nominal" onkeypress="submitBayar(this)">
                          <button type="button" id="btn-cancel" class="btn btn-danger" style="width: 20%;" onclick="cancelBayar(this)">X</button>
                          <button type="submit" id="btn-submit" hidden></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="riwayat-pembayaran">
          <div class="card">
            <div class="card-body">
              <h2>Riwayat Pembayaran</h2>

              <table class="table" id="table-order" width="100%">
                <thead>
                  <tr>
                    <th>ID Order</th>
                    <th>Nominal</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($riwayatPembayaran as $riwayat) : ?>
                    <tr>
                      <td><?= $riwayat['id'] ?></td>
                      <td><?= $riwayat['nominal'] ?></td>
                      <td><?= $riwayat['tanggal'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
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
  <script>
    // DataTable
    $(document).ready(function() {
      $('.table').DataTable({
        pagingType: 'simple',
        searching: false,
        info: false,
        lengthChange: false,
        oLanguage: {
          oPaginate: {
            sNext: '<span class="pagination-right"><i class="fa-solid fa-angle-right"></i></span>',
            sPrevious: '<span class="pagination-left"><i class="fa-solid fa-angle-left"></i></span>',
          },
        },
        dom: '<"wrapper"flipt>',
        responsive: true,
      });

      $('#table-order_filter input').addClass('form-control').css({
        width: '75%',
        padding: '10px 5px',
      });

      $('#table-order_length select').addClass('form-control').css({
        width: '38%',
        padding: '10px 5px',
      });
    });


    const formBayar = document.getElementById('form-bayar');
    const btnBayar = document.getElementById('btn-bayar');
    const btnCancel = document.getElementById('btn-cancel');
    const inputNominal = document.getElementById('nominal');

    function actBayar(element) {
      const {
        parentElement
      } = element;
      const formBayar = parentElement.querySelector('#form-bayar');

      formBayar.style.display = 'inline-block';
      element.style.display = 'none';
    }

    function cancelBayar(element) {
      const {
        parentElement
      } = element.parentElement;
      const formBayar = parentElement.querySelector('#form-bayar');
      const btnBayar = parentElement.querySelector('#btn-bayar');

      formBayar.style.display = 'none';
      btnBayar.style.display = 'inline-block';
    }

    function submitBayar(element) {
      const {
        parentElement
      } = element;
      const btnSubmit = parentElement.querySelector('#btn-submit');

      if (event.key === 'Enter') {
        btnSubmit.click();
      }
    }
  </script>
</body>

</html>