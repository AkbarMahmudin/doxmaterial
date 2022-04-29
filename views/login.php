<?php

session_start();

// Cek login
if (isset($_SESSION['login'])) {
  header('location: ../index.php');
  return;
}

?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOX CAFFE | PoS</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Default style -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" href="../img/logo.png"type = "image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <form method="POST" action="../controller/users/login.php">
                <section class="copy">
                    <h2>Login Form</h2>
                </section>
                <div class="input-container username">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Your Username" name="username" required>
                </div>
                <div class="input-container password">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Your Password" name="password" required>
                </div>
                <div class="input-container password">
                    <button type="submit" class="btn btn-block btn-primary uppercase">Login</button>
                </div>
            </form>
        </div>
        <div class="right">
            <section class="copy">
                <img src="../img/logo-login.png" alt="">
            </section>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_GET['error'])): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Username/password salah!',
            })
        </script>
    <?php endif; ?>
</body>
</html>