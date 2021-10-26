<!DOCTYPE html>
<html>
    <head>
        <title>Quiz No.2</title>  
    </head>
    <body>
        <h1>Program Hitung Luas & Keliling Persegi Panjang</h1>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>: <input type="text" name="panjang" placeholder="masukan panjang" required></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>: <input type="text" name="lebar" placeholder="masukan lebar" required></td>
                </tr>
            </table>
            <input type="submit" name="hitung" value="Hitung">
        </form>
    </body>
    <?php
        function Keliling($panjang, $lebar){
            $hasilKeliling = ($panjang + $lebar)*2;
            return $hasilKeliling;
        }
        function Luas($panjang, $lebar){
            $hasilLuas = $panjang * $lebar;
            return $hasilLuas;
        }
        function hitung($panjang, $lebar){
            echo "Persegi Panjang dengan Panjang $panjang Lebar $lebar <br><br>";
            echo "Memiliki 
            Luas : ".Luas($panjang, $lebar)."
            Keliling : ".Keliling($panjang, $lebar);
        }
        if (isset($_POST['hitung'])){
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            if (is_numeric($panjang) and is_numeric($lebar)){
                hitung($panjang, $lebar);
            } else {
                echo "Masukkan salah";
            }
        }
    
?>
</html>