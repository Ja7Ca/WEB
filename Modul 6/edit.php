<?php
require('function.php');

$id = $_GET['id'];

$mhs = query("select * from mahasiswa where id=$id")[0];

if(isset($_POST['submit'])){
    //cek keberhasilan
    if(edit($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil diedit');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diedit');
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
    <h1>Edit Data Mahasiwa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs['gambar'] ?>">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs['nama'] ?>">
            </li>
            <li>
                <label for="naim">NIM</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs['nim'] ?>">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required value="<?= $mhs['email'] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan'] ?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <img src="asset/img/<?= $mhs["gambar"] ?>" alt="" width="40">
                <input type="file" name="gambar" id="gambar" required value="<?= $mhs['gambar'] ?>">
            </li>
            <li>
            <input type="submit" name="submit" value="Edit">
            </li>
        </ul>
    </form>
</body>
</html>