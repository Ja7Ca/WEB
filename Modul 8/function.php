<?php
    $conn = mysqli_connect('localhost', 'root', '', 'data');

    function register(){
        global $conn;

        $username = strtolower($_POST['user']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $konfimrasi = mysqli_real_escape_string($conn, $_POST['konfirmasi']);

        $result = mysqli_query($conn, "select username from akun where username='$username'");

        if (mysqli_fetch_assoc($result)){
            echo "<script>
                alert('username sudah terdaftar')
            </script>";
            return false;
        }

        if ($password !== $konfimrasi){
            echo "<script>
                alert('konfirmasi password tidak sesuai')
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "insert into akun values ('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }
?>