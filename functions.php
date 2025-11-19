<?php 

    // koneksi
    $conn = mysqli_connect("localhost", "root", "", "dbrpl");


    // function register
    function register($data) {
        // koneksi
        global $conn;

        // ambil data
        $username = htmlspecialchars($data["username"]);
        $email = htmlspecialchars($data["email"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $confPassword = mysqli_real_escape_string($conn, $data["confPassword"]);


        // cek password
        if ($password != $confPassword) {
            echo
            "
                <script>
                    alert('Password dan Konfirmasi Password Tidak Sama !');
                    document.location.href = 'register.php';
                </script>
            ";
           return false;
        }

        // has password
        $hasPassword = password_hash($password, PASSWORD_DEFAULT);

        // query data
        $query = "INSERT INTO users VALUES ('', '$username', '$email', '$hasPassword')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>