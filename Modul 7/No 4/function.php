<?php
    $conn = mysqli_connect('localhost', 'root', '', 'data');

    function query($query){
        global $conn;
        $hasil = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($hasil)){ 
            $rows[] = $row;
        }
        return $rows;
    }

    function delete($id){
        global $conn;
        
        $query_delete = "DELETE from penduduk where noktp='$id'";
        
        mysqli_query($conn, $query_delete);

        return mysqli_affected_rows($conn);
    }

    function tambah(){
        global $conn;

        $noktp = $_POST['noktp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal = $_POST['tanggal'];
        $status_wn = $_POST['status_wn'];
        $pulau = $_POST['pulau'];

        $query_insert = "INSERT INTO penduduk values('$noktp', '$nama', '$alamat', '$jenis_kelamin', '$tempat_lahir', '$tanggal', '$status_wn', '$pulau')";
        mysqli_query($conn, $query_insert);

        return mysqli_affected_rows($conn);
    }

    function edit($id){
        global $conn;

        $noktp = $_POST['noktp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal = $_POST['tanggal'];
        $status_wn = $_POST['status_wn'];
        $pulau = $_POST['pulau'];

        $query_edit = "UPDATE penduduk set noktp='$noktp', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal', status_wn='$status_wn', pulau='$pulau' where noktp='$id'";

        mysqli_query($conn, $query_edit);

        return mysqli_affected_rows($conn);
    }
?>