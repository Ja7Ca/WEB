<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
</head>
<body>
    <?php
       
    ?>
    <table>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
        </tr>
        <?php
            $data = array(
                array("001", "Sabun", 4, 2000),
                array("002", "Permen", 10, 500),
                array("003", "Tissue", 2, 10000),
                array("004", "Shampo", 1, 45500)
            );
            
            for ($baris=0;$baris<=(count($data[0])-1);$baris++){
                echo "<tr>";
                for ($kolom=0;$kolom<=(count($data[$baris])-1);$kolom++){
                    echo "<td>".(string)$data[$baris][$kolom]."</td>";
                }
                echo "</tr>";
            }

            function getTotalHarga($arr){
                $total = 0;
                $sementara = 0;

                for ($baris=0;$baris<=(count($arr)-1);$baris++){
                    $sementara = $arr[$baris][2] * $arr[$baris][3];
                    $total += $sementara;
                }
                echo (string)$total;
            }
        ?>
    </table>
    <br>
    <p>Total Harga <?php getTotalHarga($data) ?></p>
</body>
</html>