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
    <h1>Pembayaran</h1>

    <div class="container-payment">
      <div class="order">
        <div class="card">
          <div class="card-body">
            <h2>Opsi Pembayaran</h3>
              <div class="label-struck">
                <div class="total-label">
                  <h3>Total Bayar</h3>
                  <p id="total"></p>
                </div>

                <hr style="border: 1px solid #c4c4c4; margin-bottom: 1.5rem;" />

                <div class="option-payment" id="option-payment">
                  <label class="form-label">Pilih Metode Pembayaran</label>
                  <input type="radio" name="metode" id="m-cash" value="cash" checked>
                  <label for="m-cash" class="option option-cash">
                    <span><i class="fa-solid fa-money-bill-wave"></i> Cash</span>
                  </label>

                  <input type="radio" name="metode" id="m-e-wallet" value="e-wallet">
                  <label for="m-e-wallet" class="option option-e-wallet">
                    <span><i class="fa-solid fa-wallet"></i> E-Wallet</span>
                  </label>

                  <input type="radio" name="metode" id="m-rekening" value="rekening">
                  <label for="m-rekening" class="option option-rekening">
                    <span><i class="fa-solid fa-credit-card"></i> Rekening</span>
                  </label>
                </div>
                <div id="cash">
                  <div class="payment-total">
                    <input type="text" placeholder="Nominal" name="nominal" class="form-control" id="nominal" />
                  </div>

                  <div class="kembali-label">
                    <h4>Kembalian</h4>
                    <p id="kembalian">0</p>
                  </div>
                </div>

                <div id="e-wallet" style="display: none;">
                  <!-- <div class="grid-container">
                    <select class="form-control" name="e-wallet">
                      <option value="gopay">Gopay</option>
                      <option value="ovo">OVO</option>
                      <option value="shopeepay">ShopeePay</option>
                    </select>
                  </div> -->
                  <input type="text" class="form-control" name="telepon" placeholder="Nomor Telepon" onkeyup="payButtonActive(this)" />
                </div>

                <div id="rekening" style="display: none;">
                  <!-- <div class="grid-container">
                    <select class="form-control">
                      <option>Bank BRI</option>
                      <option>Bank BNI</option>
                      <option>Bank BCA</option>
                    </select>
                    <div class="rekening-bank">
                    </div>
                  </div> -->
                  <input type="text" class="form-control" name="rekening" placeholder="Nomor Rekening (XXXX-XXXX-XXXX)" onkeyup="payButtonActive(this)" />
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h2>Member</h2>
            <div class="search-input">
              <input type="text" class="form-control" id="search-member" placeholder="Cari member">
              <div class="suggest-box" id="suggest-member" style="display: none;">
                <!-- <div>Hiro</div>
                <div>Taka</div>
                <div>Akbar</div> -->
              </div>
            </div>

            <h3>Buat Member Baru</h3>
            <form id="form-add-member">
              <label class="form-label" for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" required>
  
              <label class="form-label" for="telepon">Telepon</label>
              <input type="text" name="telepon" id="telepon" class="form-control" required>
  
              <label class="form-label">Jenis Kelamin</label>
              <label for="L">
                <input type="radio" name="jenis_kelamin" id="L" value="Laki-laki" checked>
                Laki-laki
              </label>
              <label for="P">
                <input type="radio" name="jenis_kelamin" id="P" value="Perempuan">
                Perempuan
              </label>
  
              <label class="form-label" for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" required></textarea>
            </form>
          </div>
        </div>
      </div>

      <div class="detail-order">
        <div class="card">
          <div class="card-body">
            <h3>Detail Order</h3>

            <div id="list-order">
              <ul style="list-style: none; margin-top: .5rem;">
              </ul>
            </div>
          </div>
        </div>

        <button class="btn btn-primary btn-block" id="btn-bayar" style="margin-bottom: 10px" disabled>
          Bayar
        </button>
        <button class="btn btn-link btn-block" id="btn-piutang" style="margin-bottom: 10px">
          Tambahkan ke tagihan
        </button>
      </div>
    </div>

  </main>
  <!-- End Content Body -->

  <?php
  include '../_includes/footer.php';
  ?>
  <!-- Custom js -->
  <script src="../../js/menu-cashier/data.js"></script>
  <script src="../../js/menu-cashier/payment.js"></script>
</body>

</html>