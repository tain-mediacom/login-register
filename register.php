<?php 

    // koneksi
    require 'functions.php';

    // function register
    if (isset($_POST["register"])) {
        if (register($_POST) > 0) {
            echo
            "
                <script>
                    alert('Registrasi Berhasil, Silahkan Login !');
                    document.location.href = 'login.php';
                </script>
            ";
        } else {
            echo
            "
                <script>
                    alert('Registrasi Gagal !');
                    document.location.href = 'register.php';
                </script>
            ";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="form">
        <div class="auth">
            <h1>Registrasi Akun</h1>
            <form action="" method="post">
                <div class="username">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="JhonDo" required>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="JhonDo@gmail.com" required>
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required>
                </div>
                <div class="confPassword">
                    <label for="confPassword">Konfirmasi Password</label>
                    <input type="password" id="confPassword" name="confPassword" placeholder="********" required>
                </div>
                <button type="register" name="register">Register</button>
            </form>
        </div>
    </div>
</body>
</html>