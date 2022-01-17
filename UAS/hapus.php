<?php
    include 'koneksi.php';

    $tabel = $_GET['tabel'];
    $id = $_GET['id'];

    $query = "delete from $tabel where id_$tabel='$id'";

    if(mysqli_query($conn, $query)){
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Data gagal dihapus / Atribute Terhubung dengan tabel lain');</script>";
        echo "<script>location.href = 'index.php'</script>";
    }
?>