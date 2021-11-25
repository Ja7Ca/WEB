<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <?php
        session_start();

        if(!isset($_SESSION['login'])){
            header("Location:login.php");
            exit;
        }
    ?>
</head>
<body>
    <h1>Cieee dah bisa login </h1>
    <a href="logout.php">Log out</a>
</body>
</html>