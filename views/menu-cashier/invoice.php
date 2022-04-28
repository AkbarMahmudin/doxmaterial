<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/invoice.css" />
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
        <p>Tgl: <span id="tgl"></span></p>
        <p>ID : DC - 01012205</p>

        <table class="table">
          <thead>
            <tr>
              <th>Menu</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Total Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Hamburger</td>
              <td>25000</td>
              <td>2</td>
              <td>50000</td>
            </tr>
            <tr>
              <td>Pizza</td>
              <td>25000</td>
              <td>2</td>
              <td>50000</td>
            </tr>
          </tbody>
        </table>

        <div class="detail-total" id="detail-total">
          <div>
            <h4>Total Bayar</h4>
            <p>100000</p>
          </div>
          <div>
            <h4>Bayar</h4>
            <p>150000</p>
          </div>
          <div>
            <h4>Kembali</h4>
            <p>50000</p>
          </div>
        </div>
      </div>

      <button class="btn btn-primary" id="btn-export" style="margin-left: 1rem">
        Export PDF
      </button>
    </div>
  </main>
  <!-- End Content Body -->

  <?php
  include '../_includes/footer.php';
  ?>
  <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
  <!-- Custom js -->
  <script>
    const invoiceContainer = document.getElementById('invoice');
    const btnExport = document.getElementById('btn-export');
    const date = document.getElementById('tgl');

    date.innerText = new Date().toLocaleDateString();

    html2pdf().set({
      filename: Date.now()
    }).from(invoiceContainer).save();

    btnExport.addEventListener('click', (event) => {
      event.preventDefault();
      html2pdf()
        .set({
          filename: Date.now()
        })
        .from(invoiceContainer)
        .save();
    });
  </script>
</body>

</html>