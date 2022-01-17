<?php
    $conn = mysqli_connect('localhost', 'root', '', 'kesehatan');


    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){ 
            $rows[] = $row;
        }
        return $rows;
    }

    function rupiah($angka){
	
        $hasil_rupiah = number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }

    function cekAkun($username, $pass){
        $data = query("select * from user where username='$username'"); 
        if($data){
            if($data[0]['password']==$pass){
                echo "<script>alert('Login Berhasil');</script>";
                echo "<script>location.href = 'index.php'</script>";
            } else {
                echo "<script>alert('Login Gagal');</script>";
            }
        } else {
            echo "<script>alert('Username Tidak Ada');</script>";
        }
    }

    function getLastId($data, $key){
        $akhir = $data[count($data)-1][$key];
        $akhir = substr($akhir, -3, 3)+1;
        $panjang = strlen($akhir);
        if($panjang == 1){
            $akhir = '00'.$akhir;
        } elseif ($panjang == 2){
            $akhir = '0'.$akhir;
        }    
        return $akhir;
    }
?>