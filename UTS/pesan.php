<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pesan.php</title>
</head>
<body>
    <form action="" method="POST">
        Toko Alat Tulis: <br>
        <select id="benda" name="benda">
            <option name="benda" value="Pensil">Pensil</option>
            <option name="benda" value="Buku Tulis">Buku Tulis</option>
            <option name="benda" value="Ballpoint">Ballpoint</option>
        </select>
        Harga : <input type="text" name="harga" required>
        Jumlah Pesanan : <input type="text" name="jumlah" required> <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){ // cek $_POST['submit'] sudah ada belum
            $benda = $_POST['benda']; // mengambil data post
            $harga = $_POST['harga']; // mengambil data post
            $jumlah = $_POST['jumlah']; // mengambil data post

            if(is_numeric($harga) && is_numeric($jumlah)){ // cek apakah angak
                echo "Anda memesan ".$jumlah." ".$benda." dengan total harga ".$jumlah*$harga;
            } else {
                echo "Inputan salah";
            }   
        }
    ?>
</body>
</html>