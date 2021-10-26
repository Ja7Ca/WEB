<!DOCTYPE html>
<html>
<head>
    <title>EDIT | Quiz No.4</title>
    <?php
    require('function.php');
    $id = $_GET['id'];
    $data = query("SELECT * FROM penduduk where noktp='$id'")[0];

    if (isset($_POST['submit'])){
        if(edit($id)){
            echo "<script>
                alert('Data Berhasil Diedit');
                document.location.href = 'no4.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Gagal Diedit');
                document.location.href = 'no4.php';
            </script>";
        }
    }

    ?>
</head>
<body>
    <h1>Edit Data Penduduk</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td>NIK</td>
                <td>: <input type="text" name="noktp" placeholder="Masukkan NIK" value='<?= $data['noktp'] ?>' required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" placeholder="Masukkan Nama" value='<?= $data['nama'] ?>' required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat" placeholder="Masukkan Alamat" value='<?= $data['alamat'] ?>' required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <input type="radio" name="jenis_kelamin" value="L"
                <?php if($data['jenis_kelamin'] == 'L') :?>
                checked
                <?php endif;?>                
                >L 
                <input type="radio" name="jenis_kelamin" value="P"
                required 
                <?php if($data['jenis_kelamin'] == 'P') :?>
                checked
                <?php endif;?>
                >P</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>: <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value='<?= $data['tempat_lahir'] ?>' required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <input type="date" name="tanggal" placeholder="yyyy-mm-dd" value='<?= $data['tanggal_lahir'] ?>' required></td>
            </tr>
            <tr>
                <td>Status WN</td>
                <td>: <input type="radio" name="status_wn" value="WNI"
                <?php if($data['status_wn'] == 'WNI') :?>
                checked
                <?php endif;?>
                >WNI 
                <input type="radio" name="status_wn" value="WNA" 
                <?php if($data['status_wn'] == 'WNA') :?>
                checked
                <?php endif;?>
                required>WNA</td>
            </tr>
            <tr>
                <td>Pulau</td>
                <td>: <input type="checkbox" name="pulau" value="Jawa"
                <?php if($data['pulau'] == 'Jawa') :?>
                checked
                <?php endif;?>
                >
                Jawa
                <input type="checkbox" name="pulau" value="Sumatra"
                <?php if($data['pulau'] == 'Sumatra') :?>
                checked
                <?php endif;?>
                >
                Sumatra
                <input type="checkbox" name="pulau" value="Kalimantan"
                <?php if($data['pulau'] == 'Kalimantan') :?>
                checked
                <?php endif;?>
                >
                Kalimatan
                <input type="checkbox" name="pulau" value="Papua"
                <?php if($data['pulau'] == 'Papua') :?>
                checked
                <?php endif;?>
                >
                Papua
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Edit Data">
    </form>
</body>
</html>