<?php
require('function.php');

if(isset($_POST['submit'])){
    //cek keberhasilan
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiwa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="naim">NIM</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
            <input type="submit" name="submit" value="Tambah">
            </li>
        </ul>
    </form>
</body>
</html>