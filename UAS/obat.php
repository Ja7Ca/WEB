<?php
    include 'koneksi.php';

    if(isset($_POST['tambahobat'])){
        $data_obat = query("select * from obat");
        $id_obat = getLastId($data_obat, 'id_obat');
        $nama_obat = $_POST['nama_obat'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $query = "insert into obat values('OBT$id_obat', '$nama_obat', '$harga', '$stok')";
        if(mysqli_query($conn, $query)){
            echo "<script>alert('Data berhasil masuk');</script>";
        } else {
            echo "<script>alert('Data gagal masuk');</script>";
        }
    }

    if(isset($_POST['tambahstok'])){
        $id_obat = $_POST['id'];
        $harga_obat = query("select stok from obat where id_obat='$id_obat'");
        $tambah = $_POST['jumlahstok']+$harga_obat[0]['stok'];
        $query = "update obat set stok='$tambah' where id_obat='$id_obat'";

        if(mysqli_query($conn, $query)){
            echo "<script>alert('Data berhasil ditambah');</script>";
        } else {
            echo "<script>alert('Data gagal ditambah');</script>";
        }
    }

    if(isset($_POST['gantiHarga'])){
        $id_obat = $_POST['id'];
        $ganti = $_POST['hargaBaru'];
        $query = "update obat set harga='$ganti' where id_obat='$id_obat'";

        if(mysqli_query($conn, $query)){
            echo "<script>alert('Data berhasil ditambah');</script>";
        } else {
            echo "<script>alert('Data gagal ditambah');</script>";
        }
    }

    if(isset($_POST['gantiNama'])){
        $id_obat = $_POST['id'];
        $ganti = $_POST['namaBaru'];
        $query = "update obat set nama_obat='$ganti' where id_obat='$id_obat'";

        if(mysqli_query($conn, $query)){
            echo "<script>alert('Data berhasil ditambah');</script>";
        } else {
            echo "<script>alert('Data gagal ditambah');</script>";
        }
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

    <title>Apotik</title>
  </head>
  <body style="height: 100vh; width: 100vw;" class="bg-secondary bg-opacity-25">
    <div class="container py-5">
        <a href="index.php" class="text-decoration-none text-white fw-bold px-3 py-2 bg-info">Transaksi</a>
    </div>
    <div class="container text-center d-flex flex-column justify-content-center">
        <h3>Input Obat</h3>
        <form action="" method="post">
        <center>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_obat" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" id=""></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="number" name="stok" maxlength="3" required></td>
            </tr>
            <tr>
                <td colspan="3" class="text-center"><input type="submit" name="tambahobat" value="Tambah Obat" class="text-decoration-none text-white fw-bold px-3 py-2 bg-success border-0"></td>
            </tr>
        </form>
        </table>
        </center>
        <hr>
        <h3>Data Obat</h3>
        <table style="width: 100%; margin-top: 10px;">
            <tr>
                <?php
                    $obat = query("select * from obat");
                ?>
                <th>ID Obat</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Tambah Stok</th>
            </tr>
            <?php foreach($obat as $row): ?>
            <tr>
                <td><?= $row['id_obat'] ?></td>
                <td><?= $row['nama_obat'] ?>
                    <form method="post">
                        <input type="hidden" name="id" value="<?= $row['id_obat'] ?>">
                        <input type="text" name="namaBaru" required>
                        <input type="submit" name="gantiNama" value="Ganti Nama" class="text-white fw-bold px-3 py-2 bg-warning border-0">  
                    </form>
                </td>
                <td><?= rupiah($row['harga']) ?>
                    <form method="post">
                    <input type="hidden" name="id" value="<?= $row['id_obat'] ?>">
                        <input type="number" name="hargaBaru" required>
                        <input type="submit" name="gantiHarga" value="Ganti Harga" class="text-white fw-bold px-3 py-2 bg-primary border-0">
                    </form>
                </td>
                <td><?= $row['stok'] ?>
                    <form method="post">
                    <input type="hidden" name="id" value="<?= $row['id_obat'] ?>">
                        <input type="number" name="jumlahstok" required>
                        <input type="submit" name="tambahstok" value="Tambah Stok" class="text-white fw-bold px-3 py-2 bg-success border-0">  
                    </form>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $row['id_obat'] ?>&tabel=obat" class="text-decoration-none text-white fw-bold px-3 py-2 bg-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>