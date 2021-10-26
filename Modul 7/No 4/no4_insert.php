<!DOCTYPE html>
<html>
<head>
    <title>INSERT | Quiz No.4</title>
</head>
<body>
    <h1>Tambah Data Penduduk</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td>NIK</td>
                <td>: <input type="text" name="noktp" placeholder="Masukkan NIK" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" placeholder="Masukkan Nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat" placeholder="Masukkan Alamat" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <input type="radio" name="jenis_kelamin" value="L" checked>L <input type="radio" name="jenis_kelamin" value="P" required>P</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>: <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <input type="date" name="tanggal" placeholder="yyyy-mm-dd" value="" required></td>
            </tr>
            <tr>
                <td>Status WN</td>
                <td>: <input type="radio" name="status_wn" value="WNI" checked>WNI <input type="radio" name="status_wn" value="WNA" required>WNA</td>
            </tr>
            <tr>
                <td>Pulau</td>
                <td>: <input type="checkbox" name="pulau" value="Jawa" checked>
                  Jawa
                  <input type="checkbox" name="pulau" value="Sumatra">
                  Sumatra
                  <input type="checkbox" name="pulau" value="Kalimantan">
                  Kalimatan
                  <input type="checkbox" name="pulau" value="Papua">
                  Papua
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
    <?php
        require('function.php');

        if (isset($_POST['submit'])){
            if(tambah()){
                echo "<script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'no4.php';
                </script>";
            } else {
                echo "<script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'no4.php';
                </script>";
            }
        }
    ?>
</body>
</html>