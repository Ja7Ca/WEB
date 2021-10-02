<!DOCTYPE html>
<html>
<head>
    <title>Date PHP</title>
</head>
<body>
    <?php 
        //mengubah niali timezone ke daerah sendiri 'Asia/Jakar' atau dengan nilai GMT yang sama
        date_default_timezone_set('Asia/Jakarta');

        // date() membuat waktu, dengan default waktu "now"
        echo "<h1>Waktu Reload Page ini</h1>";
        // membuat waktu dengan inputan format
        // l, hari | d, tanggal | F bulan | Y tahun | H jam | i menit | s detik
        // bisa menggunakan huruf kecil seperti y, akan tetapi returnnya berupa int dengan panjang 2
        // huruf besar agar menampilkan full text
        $now = date('l, d F Y, H:i:s');
        echo $now;
        
        echo "<br>";
        echo "<br>";

        echo "<h1>Saya Lahir pada Hari</h1>";
        // mktime memiliki nilai input int
        $lahir = mktime(0,0,0,3,25,2001); //membuat waktu dengan spesifik tanggal
        echo "Maret 25, 2001 di hari ".date("l", $lahir); //mengambil hari pada tanggal

        echo "<br>";
        echo "<br>";

        echo "<h1>5 Hari dari Sekarang</h1>";
        //membuat detik sejak 1 Januari 1970, di tambah 5 hari | 5(hari)*24(jam)*60(menit)*60(detik)
        $waktu = time() + (5 * 24 * 60 * 60); 
        echo date("l",$waktu);

        echo "<h1>1 Tahun yang Lalu</h1>";
        // sama seperti time(), strtotime() menggunakan nilai input string
        $jump = strtotime("-1 year");
        echo date("l", $jump);
    ?>
</body>
</html>