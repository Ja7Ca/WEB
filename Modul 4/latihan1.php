<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
</head>
<body>
    <?php
        $bilangan = [215, 367, 234, 555, 122, 899, 200, 194, 420, 98];

        echo '<h2>$bilangan = ['.implode(", ", $bilangan).']</h2>';

        function bilKecil($arr){
            $bilKecil = $arr[0];
            for ($i=0;$i<=(count($arr)-1);$i++){
                if (($arr[$i]) < $bilKecil){
                    $bilKecil = $arr[$i];
                }
            }
            return $bilKecil;
        }
        function bilBesar($arr){
            $bilBesar = $arr[0];
            for ($i=0;$i<=(count($arr)-1);$i++){
                if (($arr[$i]) > $bilBesar){
                    $bilBesar = $arr[$i];
                }
            }
            return $bilBesar;
        }
        function cariKecilBesar($arr){
            echo "Bilangan kecil pada array tersebut = ";
            echo bilKecil($arr);
            echo "<br>";
            echo "Bilangan besar pada array tersebut = ";
            echo bilBesar($arr);
            
        }
        cariKecilBesar($bilangan);
    ?>
</body>
</html>