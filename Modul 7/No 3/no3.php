<!DOCTYPE html>
<html>
<head>
    <title>Quiz No.3</title>
</head>
<body>
    <h1>Perkalian / Pembagian Angka</h1>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Angka 1</td>
                <td>: <input type="text" name="angka1" placeholder="masukkan angka pertama"></td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td>: <input type="text" name="angka2" placeholder="masukkan angka kedua"></td>
            </tr>
        </table>
        <input type="submit" name="kali" value="Kali">
        <input type="submit" name="bagi" value="Bagi">
    </form>
    <?php
        function kali($angka1, $angka2){
            return $angka1*$angka2;
        }
        function bagi($angka1, $angka2){
            return $angka1/$angka2;
        }
        function getData($operasi){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            if(!is_numeric($angka1) or !is_numeric($angka2)){
                echo "Inputan $angka1 & $angka2, Ada yang bukan angka";
                return false;
            }
            if($operasi == 'kali'){
                echo "$angka1 x $angka2 = ".kali($angka1, $angka2);
            } elseif ($operasi == 'bagi'){
                echo "$angka1 / $angka2 = ".bagi($angka1, $angka2);
            }
        }
        if(isset($_POST['kali'])){
            getData('kali');
        }
        if(isset($_POST['bagi'])){
            getData('bagi');
        } 
    ?>
</body>
</html>