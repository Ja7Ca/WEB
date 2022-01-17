<?php
    include 'koneksi.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];

        cekAkun($username, $pass);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Apotik</title>
  </head>
  <body style="height: 100vh; width: 100vw;" class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-25">
    <div class="container">
        <div class="login"">
            <form action="" method="post" class="text-center">
                <h1>Login Form</h1>
                <div class="form-login my-3">
                    <div class="row d-flex justify-conten-center">
                        <div class="col text-end my-2">
                            <h3>Username</h3>
                            <h3>Password</h3>
                        </div>
                        <div class="col d-flex flex-column text-start">
                            <input type="text" name="username" style="width: 15vw; height: 50%;" required>
                            <input type="password" name="password" style="width: 15vw; height: 50%;" required>
                        </div>
                    </div>
                    <input type="submit" name="login" value="login" style="width: 15vw; margin-top: 10px;">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>