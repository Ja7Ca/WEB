<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $nama = "Jarot Setiawan";
        $panggilan = "Jarot";
        echo '<h1>$nama = '.$nama."</h1>";
        echo '<h1>$panggilan = '.$panggilan."</h1>";
        echo 'strlen($nama) = '.strlen($nama); // mereturn panjang string

        echo "<br>";
        echo "<br>";

        echo 'strcmp($nama, $panggilan) = '.strcmp($nama, $panggilan); // selisih antara 2 string

        echo "<br>";
        echo "<br>";
        
        echo 'strstr($nama, $panggilan) = '.strstr($nama, $panggilan); // mereturn sisa string ketika ditemukan

        echo "<br>";
        echo "<br>";

        $arr = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
        echo '<h1>$arr = (';
        foreach ($arr as $i){
            echo '"'.$i.'", ';
        }
        echo ")</h1>";
        echo join("#", $arr); // melakukan print tiap value array dengan batas '#'

        echo "<br>";
        echo "<br>";

        echo 'explode(" ",$nama) = ';
        print_r(explode(" ",$nama)); // membagi string dengan " "(space)

        echo "<br>";
        echo "<br>";

        $char = "<h1>L200190247</h1>";
        echo '$char = '.htmlspecialchars($char); // mencegah browser menggunakannya sebagai elemet
    ?>    
</body>
</html>