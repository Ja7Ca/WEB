<?php
    require "../function.php";
    
    $keyword = $_GET['keyword'];
    $query = "select * from mahasiswa where 
        nama like '%$keyword%' or
        nim like '%$keyword%' or
        jurusan like '%$keyword%' or
        email like '%$keyword%'
        ";
    $mahasiswa = query($query);

?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($mahasiswa as $row): ?>
        <tr>
            <td><?= $i ?>.</td>
            <td><a href="edit.php?id=<?= $row['id'] ?>">edit</a> | <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data?')">delete</a></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><img src="asset/img/<?= $row["gambar"] ?>" width="50"></td>
            <?php $i++ ?>
        </tr>
        <?php endforeach ?>
    </table>