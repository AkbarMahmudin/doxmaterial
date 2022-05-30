<?php

include '../../controller/menu-cashier/invoice.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/invoice.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" />

</head>

<body id="body-pd">
  <?php
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main class="container">
    <!-- Coding disini -->
    <div class="card">
      <div class="card-body" id="invoice">
        <h1>Invoice</h1>
        <p>Tgl: <span id="tgl"><?= date_format(date_create($order['tanggal']), 'd M Y') ?></span></p>
        <p>ID : <?= $order['id'] ?></p>

        <table class="table" id="invoiceTable" width="100%">
          <thead>
            <tr>
              <th>Barang</th>
              <th>Harga Satuan</th>
              <th>Jumlah</th>
              <th>Total Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($detailOrders as $detail) : ?>
              <tr>
                <td><?= $detail['nama'] ?></td>
                <td><?= $detail['harga'] ?></td>
                <td><?= $detail['jumlah'] ?></td>
                <td><?= $detail['total'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <div class="detail-total" id="detail-total">
          <div>
            <h4>Metode Pembayaran</h4>
            <p><?= $order['metode'] ?></p>
          </div>
          <div>
            <h4>Status</h4>
            <p><?= $order['status'] ?></p>
          </div>
          <div>
            <h4>Total Bayar</h4>
            <p><?= $order['total'] ?></p>
          </div>
        </div>
      </div>

  </main>
  <!-- End Content Body -->

  <?php
  include '../_includes/footer.php';
  ?>

  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
  <!-- Custom js -->
  <script>
    $(document).ready(function() {
      $('#invoiceTable').DataTable({
        paging: false,
        searching: false,
        ordering: false,
        info: false,
        dom: 'frtipB',
        buttons: [
          {
            extend: 'print',
            text: 'Print',
            tag: 'button',
            className: 'btn btn-secondary',
            init: function(api, node, config) {
              $(node).removeClass('dt-button')
              $(node).removeClass('buttons-print')
              $(node).css({ marginTop: '10px' });
            }
          },
          {
            extend: 'pdf',
            text: 'Pdf',
            tag: 'button',
            className: 'btn btn-danger',
            init: function(api, node, config) {
              $(node).removeClass('dt-button')
              $(node).removeClass('buttons-pdf')
              $(node).css({ marginTop: '10px' });
            }
          },
        ]
      });
    });
  </script>
</body>

</html>