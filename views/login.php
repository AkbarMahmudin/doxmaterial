<html lang="en">
<head>
    <?php
    include '_includes/header.php';
    ?>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <form>
                <section class="copy">
                    <h2>Login Form</h2>
                </section>
                <div class="input-container username">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Your Username">
                </div>
                <div class="input-container password">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Your Password">
                </div>
                <div class="input-container password">
                    <a href="../index.php" class="btn btn-block btn-primary uppercase">Login</a>
                </div>
            </form>
        </div>
        <div class="right">
            <section class="copy">
                <img src="../img/logo-login.png" alt="">
            </section>
        </div>
    </div>
</body>
</html>