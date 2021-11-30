<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <?php
        session_start();
        if(isset($_COOKIE['login'])){
            if ($_COOKIE['login'] == 'true'){
                $_SESSION['login'] = true;
            }
        }

        if(isset($_SESSION['login'])){
            header("Location:index.php");
            exit;
        }

        require 'function.php';

        if (isset($_POST['login'])){
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $result = mysqli_query($conn, "select * from akun where username = '$username'");

            if (mysqli_num_rows($result) === 1){

                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row['password'])){

                    $_SESSION['login'] = true;

                    if(isset($_POST['remember'])){
                        setcookie('login', 'true', time()+60);
                    }

                    header(("Location:index.php"));
                    exit;
                }
            }

            $error = true;
        }
    ?>
</head>
<body>
    <h1>Login</h1>

        <?php if(isset($error)): ?>
            <p style="color: red; font-style: italic;">Username / Password Salah</p>
        <?php endif; ?>

    <form method="post" action="">
        <h3>Username:<input type="text" name="user"></h3>
        <h3>Password:<input type="password" name="pass"></h3>
        <br>
        <input type="submit" name="login" value="Login">
        <input type="checkbox" name="remember">
          Remember me
        <br>
        <br>
        <p>Belum punya akun?</p><a href="register.php">makanya buat</a>
    </form>
</body>
</html>