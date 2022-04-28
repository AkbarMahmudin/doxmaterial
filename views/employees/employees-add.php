<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/employees-add.css">

</head>

<body id="body-pd">

  <?php
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- start Chat -->
    <!-- start container -->
    <div class="container-chat">
      <div class="card">
        <div class="wrap-header">
          <div class="header">
            <h3>Selamat datang di Paradox Help </h3>
            <p> Kami siap membantu semua kebutuhan Anda.</p>
          </div>
        </div>
        <div class="wrap-chat">
          <div class="cs-chat">
            <div class="cs-chat-profile">
              <div class="cs-icon">
                <i class="fa-solid fa-headset"></i>
              </div>
              <div class="cs-name">
                <p>Customer Support</p>
              </div>
            </div>
            <p>Hallo ada yang bisa kami bantu?</p>
            <p class="time">12.13 PM</p>
          </div>

          <div class="user-chat">
            <div class="user-chat-profile">
              <div class="user-name">
                <p>User</p>
              </div>
              <div class="user-icon">
                <i class="fa-regular fa-circle-user"></i>
              </div>
            </div>
            <p>Bagaimana cara menambahkan menu?</p>
            <p class="time">12.14 PM</p>
          </div>

          <div class="send-message">
            <div class="text">
              <input type="text" placeholder="Ketikan pertanyaan di sini..." name="text-message" id="text-message" />
            </div>
            <div class="send-icon">
              <i class="fa-solid fa-lg fa-paper-plane"></i>

            </div>
          </div>
        </div>
      </div>
      <!-- end container -->

    </div>
    <!-- end chat -->

  </main>
  <!-- End Content Body -->

  <?php
  include '../_includes/footer.php';
  ?>
  <!-- Custom js -->
  <script src="../../js/employees-add.js"></script>

</body>

</html>