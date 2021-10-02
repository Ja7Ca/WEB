<!DOCTYPE html>
<html>
<head>
    <title>Utilitiy</title>
</head>
<body>
    <?php
        echo "<h1>Count</h1>";
        $nilai = ["A","B","C","D"];
        echo '<h3>$nilai = "A","B","C","D"</h3>';
        echo 'count($nilai) = '.count($nilai); // banyak indeks pada inputan

        echo "<br>";
        echo "<br>";
        
        echo "<h1>Isset</h1>";
        echo 'isset($nilai) = '.isset($nilai); // akan mereturn true atau 1 bila variable sudah ada
        echo "<br>"; 
        echo 'isset($mobil) = '.isset($mobil); // akan mereturn false jika variable belum dibuat

        echo "<br>";
        echo "<br>";
        
        echo "<h1>Empty</h1>";
        echo 'empty($nilai) = '.empty($nilai); // akan mereturn false bila variable sudah ada
        echo "<br>"; 
        echo 'empty($mobil) = '.empty($mobil); // akan mereturn true atau 1 jika variable belum dibuat

        //empty bisa berupa 0, 0.0, "0", "", NULL, FALSE, array()
    ?>
</body>
</html>