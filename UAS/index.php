<?php
    include 'koneksi.php';

    if(isset($_POST['tambahTransaksi'])){
        function kurangiStok($obat, $jumlah){
            global $conn;

            $stokObat = query("select stok from obat where id_obat='$obat'");
            $ganti = $stokObat[0]['stok'] - $jumlah;
            if($ganti < 0){
                echo "<script>alert('Stok kurang');</script>";
                return false;
            } else {
                mysqli_query($conn, "update obat set stok='$ganti' where id_obat='$obat'");
                return true;
            }
        }
        $data_transaksi = query("select * from transaksi");
        $id = getLastId($data_transaksi, 'id_transaksi');
        $dokter = $_POST['dokter'];
        $pasien = $_POST['pasien'];
        $obat = $_POST['obat'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];

        $query = "insert into transaksi values ('TRS$id', '$dokter', '$pasien', '$obat', '$jumlah', '$keterangan');";

        if(kurangiStok($obat, $jumlah)){
            if(mysqli_query($conn, $query)){
            
                echo "<script>alert('Data berhasil ditambah');</script>";
            } else {
                echo "<script>alert('Data gagal ditambah');</script>";
            }
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
        <a href="obat.php" class="text-decoration-none text-white fw-bold px-3 py-2 bg-info">Obat</a>
    </div>
    <div class="container text-center d-flex flex-column justify-content-center">
        <h3>Input Transaksi</h3>
        <form action="" method="post">
        <center>
        <table>
            <tr>
                <?php
                    $pasien = query("select * from pasien");
                ?>
                <td>Pasien</td>
                <td>:</td>
                <td><select name="pasien" required>
                    <?php foreach($pasien as $row): ?>
                    <option value="<?= $row['id_pasien'] ?>"><?= $row['nama_pasien'] ?></option>
                    <?php endforeach ?>
                </select></td>
            </tr>
            <tr>
                <?php
                    $dokter = query("select * from dokter");
                ?>
                <td>Dokter</td>
                <td>:</td>
                <td><select name="dokter" required>
                    <?php foreach($dokter as $row): ?>
                    <option value="<?= $row['id_dokter'] ?>"><?= $row['nama_dokter'] ?></option>
                    <?php endforeach ?>
                </select></td>
            </tr>
            <tr>
                <?php
                    $obat = query("select * from obat");
                ?>
                <td>Obat</td>
                <td>:</td>
                <td><select name="obat" required>
                    <?php foreach($obat as $row): ?>
                    <option value="<?= $row['id_obat'] ?>"><?= $row['nama_obat'] ?></option>
                    <?php endforeach ?>
                </select></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="number" name="jumlah" maxlength="2" required></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input type="text" name="keterangan" maxlength="10" required></td>
            </tr>
            <tr>
                <td colspan="3" class="text-center"><input type="submit" name="tambahTransaksi" value="Tambah Transaksi" class="text-decoration-none text-white fw-bold px-3 py-2 bg-success border-0"></td>
            </tr>
        </form>
        </table>
        </center>
        <hr>
        <h3>Riwayat Transaksi</h3>
        <table style="width: 100%; margin-top: 10px">
            <tr>
                <?php
                    $transaksi = query("select transaksi.*, dokter.*, pasien.*, obat.* from transaksi join dokter on transaksi.id_dokter=dokter.id_dokter join pasien on transaksi.id_pasien=pasien.id_pasien join obat on transaksi.id_obat=obat.id_obat");
                ?>
                <th>ID Transaksi</th>
                <th>Dokter</th>
                <th>Pasien</th>
                <th>Obat</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <?php foreach($transaksi as $row): ?>
            <tr>
                <td><?= $row['id_transaksi'] ?></td>
                <td><?= $row['nama_dokter'] ?></td>
                <td><?= $row['nama_pasien'] ?></td>
                <td><?= $row['nama_obat'] ?></td>
                <td><?= $row['jumlah'] ?></td>
                <td><?= rupiah($row['harga']*$row['jumlah']) ?></td>
                <td><?= $row['keterangan_transaksi'] ?></td>
                <td><a href="hapus.php?id=<?= $row['id_transaksi'] ?>&tabel=transaksi" class="text-decoration-none text-white fw-bold px-3 py-1 bg-danger">Hapus</a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>