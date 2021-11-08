<?php
    $NIK = array("M001","M002", "M003");
    $Nama = array("Septiana", "Rizki", "Clarissa");
    $TmpLahir = array("Solo", "Jakarta", "Surabaya");
    $TglLahir = array("01-04-1998", "30-03-1985", "12-12-1990");
    date_default_timezone_set('Asia/Jakarta'); // set time zone

    function toMonth($date){
        $d = strtotime($date); // str to int unik untuk membuat tanggal
        return date("d F Y", $d); // membuat tanggal dengan format "d F Y"
    }
    function umur($date){
        $d = date("Y", strtotime($date)); // str to int unik untuk membuat tanggal
        $now = date("Y"); // membuat tanggal dengan format "Y"

        return $now-$d; // mengembalikan nilai tanggal format "Y"
    }
?>
<body>
    <table border="1" cellspacing="0">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Usia</th>
        </tr>
        <?php for($i=0; $i < count($NIK); $i++){ ?> <!-- menyisipkan for php ke file html -->
        <tr>
            <td><?= $NIK[$i] ?></td>
            <td><?= $Nama[$i] ?></td>
            <td><?= $TmpLahir[$i].", ". toMonth($TglLahir[$i]) ?></td>
            <td><?= umur($TglLahir[$i]) ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
