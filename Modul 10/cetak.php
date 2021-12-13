<?php
//mengambil libarary mpdf dari folder vendor
require_once __DIR__ . '/vendor/autoload.php';

//ambil data dari database
$conn = mysqli_connect ('localhost','root','','kuliah');
$cari = "SELECT * FROM mahasiswa";
$mahasiswa = mysqli_query($conn, $cari);
//membuat file pdf baru
$mpdf = new \Mpdf\Mpdf();
//isi dokumen yang dicetak
$html = '<html>
<head>
    <title>Jarot Setiwan L200190247</title>
</head>
<body class="container">
    <h1 class="text-center mt-4">Daftar Mahasiswa</h1>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
        </tr>';
        $i=1;
        foreach ($mahasiswa as $row){
            $html .= '<tr>
            <td>'.$i++.'</td>
            <td>'.$row["nim"].'</td>
            <td>'.$row["nama"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["jurusan"].'</td>
            <td><img src="asset/img/'.$row["gambar"].'" width="50"></td>
        </tr>';
        };
$html .='</table>
</div>
</body>
</html>';
//mencetak pdf dengan $html adalah dokumen isiannya
$mpdf->WriteHTML($html);
//menyimpan dalam format pdf
$mpdf->Output();
?>