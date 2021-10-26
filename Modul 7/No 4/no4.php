<!DOCTYPE html>
<html lang="en">
<head>
    <title>VIEW | Quiz No.4</title>
    <?php
        require('function.php');

        $data = query("SELECT * from penduduk");
    ?>
</head>
<body>
    <h1>Data Penduduk</h1>
    <br>
    <a href="no4_insert.php" style="color: green; text-decoration: none;">+ Data Penduduk</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Satus WN</th>
            <th>Pulau</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $i ?>.</td>
            <td><?= $row["noktp"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["alamat"] ?></td>
            <td><?= $row["jenis_kelamin"] ?></td>
            <td><?= $row['tempat_lahir'].", ".$row['tanggal_lahir'] ?></td>
            <td><?= $row["status_wn"] ?></td>
            <td><?= $row["pulau"] ?></td>
            <td><a href="no4_edit.php?id=<?= $row['noktp'] ?>" style="text-decoration: none; color: blue;">edit</a> | <a href="no4_delete.php?id=<?= $row['noktp'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data NIK <?= $row['noktp'] ?>?')" style="text-decoration: none; color: red;">delete</a></td>
            <?php $i++ ?>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>