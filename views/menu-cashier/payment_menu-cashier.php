<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/payment_menu-cashier.css" />
</head>

<body id="body-pd">
  <?php
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main class="container">
    <!-- Coding disini -->
    <div class="card">
      <form id="bayar" action="">
        <div class="card-body">
          <h1>Pembayaran</h1>

          <div class="label-struck">
            <div class="total-label">
              <h2>Total Bayar</h2>
              <p id="total"></p>
            </div>
            <hr style="border: 1px solid #c4c4c4; margin-bottom: 1.5rem;" />

            <div class="option-payment">

              <div id="wallet">
                <label>E-Wallet</label>
                <div class="grid-container">
                  <select class="form-control" name="e-wallet">
                    <option value="gopay">Gopay</option>
                    <option value="ovo">OVO</option>
                    <option value="shopeepay">ShopeePay</option>
                  </select>
                  <input type="text" class="form-control" name="no-e-wallet" placeholder="Nomor Telepon" />
                </div>
              </div>

              <div id="bank">
                <label>Rekening</label>
                <div class="grid-container">
                  <select class="form-control">
                    <option>Bank BRI</option>
                    <option>Bank BNI</option>
                    <option>Bank BCA</option>
                  </select>
                  <div class="rekening-bank">
                    <input type="text" class="form-control" placeholder="Nomor Rekening (XXXX-XXXX-XXXX)" />
                  </div>
                </div>
              </div>

              <div id="cash">
                <div class="payment-total">
                  <label>Cash</label>
                  <input type="text" placeholder="Nominal" name="nominal" class="form-control" id="nominal" />
                </div>

                <div class="kembali-label">
                  <h4>Kembalian</h4>
                  <p id="kembalian">0</p>
                </div>
              </div>

            </div>

            <button class="btn btn-primary btn-block" id="btn-bayar" style="margin-bottom: 10px" disabled>
              Bayar
            </button>
          </div>
        </div>
      </form>
    </div>
  </main>
  <!-- End Content Body -->

  <?php
  include '../_includes/footer.php';
  ?>
  <!-- Custom js -->
  <script src="../../js/payment_menu-cashier/perhitungan.js"></script>
</body>

</html>