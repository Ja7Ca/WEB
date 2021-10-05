<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST" accept="latihan3.php">
        <Label>Pengecekan Huruf Konsonan dan Huruf Vokal</Label>
        <br>
        <textarea name="kalimat" rows="3" cols="30"></textarea>
        <br>
        <input type="submit" name="submit" value="Cek">
    </form>
    <?php
        
        if($_POST['submit']){
            $kalimat = $_POST['kalimat'];
            $lower = strtolower($kalimat);
            $vokal = ['a','i','u','e','o'];

            $countVokal=0;
            $countKonsonan =0;
            for ($i=0;$i<=strlen($lower)-1;$i++){
                if(in_array($lower[$i], $vokal) and $lower[$i]!=" "){
                    $countVokal+=1;
                } elseif ($lower[$i]!=" ") {
                    $countKonsonan+=1;
                } else {
                    continue;
                }
            }
            echo "<br>";
            echo "Masukkan Anda = ".$kalimat;
            echo "<br>";
            echo "Jumlah Vokal = ".$countVokal;
            echo "<br>";
            echo "Jumlah Konsonan = ".$countKonsonan;
        }

    ?>
</body>
</html>