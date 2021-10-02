<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Pow</h1>";
        echo 'pow(2,4) = '.pow(2,4); // 2 pangkat 4

        echo "<br>";
        echo "<br>";

        echo "<h1>Rand</h1>";
        echo 'rand(1,10) = '.rand(1,10); // bilangan acak antara 1 - 10

        echo "<br>";
        echo "<br>";

        $arr = [2,4,6,8,10];
        echo '<h1>$arr = 2,4,6,8,10</h1>';
        echo 'max($arr) = '.max($arr); // mereturn nilai terbesar dari inputan
        echo "<br>";
        echo 'min($arr) = '.min($arr);  // mereturn nilai terkecil dari inputan

        echo "<br>";
        echo "<br>";
        
        echo "<h1>Round</h1>";
        echo 'round(3.70) = '.round(3.70); // pembulatan angka
        echo "<br>";
        echo 'round(3.40) = '.round(3.40); // pembulatan angka

        echo "<br>";
        echo "<br>";
        
        echo "<h1>Sin, Cos, Tan</h1>";
        echo 'sin(0) = '.sin(0); // mereturn nilai sin inputan
        echo "<br>";
        echo 'cos(0) = '.cos(0); // mereturn nilai cos inputan
        echo "<br>";
        echo 'tan(0) = '.tan(0); // mereturn nilai tan inputan
    ?>
</body>
</html>