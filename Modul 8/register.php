<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <?php
        require 'function.php';
        if (isset($_POST['register'])){
            if(register() > 0){
                echo "<script>
                alert('user telah ditambahkan')
            </script>";
            } else {
                echo mysqli_error($conn);
            }
        }
    ?>
</head>
<body>
    <form method="post" action="">
        <h3>Username:<input type="text" name="user"></h3>
        <h3>Password:<input type="password" name="pass"></h3>
        <h3>Konfirmasi:<input type="password" name="konfirmasi" placeholder="sama seperti password"></h3>
        <br>
        <input type="submit" name="register" value="Register">
        <br>
        <br>
        <p>Sudah punya akun? </p><a href="login.php">makanya login</a>
    </form>
</body>
</html>