<?php 
    // koneksi ke db
    $conn = mysqli_connect('localhost','root','','kuliah');

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){ 
            $rows[] = $row;
        }
        return $rows;
    }

    function upload(){

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        if ($error == 4){
            echo "<script>
                alert('Gambar belum diupload');
            </script>";
            return false;
        }

        $ekstensiFile = ['jpeg', 'jpg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        // cek ekstensi
        if(!in_array($ekstensiGambar, $ekstensiFile)){
            echo "<script>
                alert('Ekstensi harus jpeg jpg png');
            </script>";
            return false;
        } elseif($ukuranFile > 500000){
            echo "<script>
                alert('Ukuran terlalu besar');
            </script>";
            return false;
        } else {
            $namaBaru = uniqid();
            $namaBaru .= ".";
            $namaBaru .= $ekstensiGambar;
            move_uploaded_file($tmpName, "./asset/img/".$namaBaru);

            return $namaBaru;
        }
    }
    
    function tambah($data){
        global $conn;

        $nama = htmlspecialchars($data['nama']);
        $nim = htmlspecialchars($data['nim']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        // $gambar = htmlspecialchars($data['gambar']);

        $gambar = upload();

        if($gambar){
            $query_insert = "insert into mahasiswa values ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";
            mysqli_query($conn, $query_insert);
        }

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;

        $query_delete = "delete from mahasiswa where id=$id";
        mysqli_query($conn, $query_delete);
        
        return mysqli_affected_rows($conn);      
    }

    function edit($data){
        global $conn;

        $nama = htmlspecialchars($data['nama']);
        $nim = htmlspecialchars($data['nim']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $gambarlama = htmlspecialchars($data['gambar']);
        $id = $data['id'];

        //cek jika ubah gambar
        if($_FILES['gambar']['error'] == 4){
            $gambar = $gambarlama;
        } else {
            $gambar = upload();
        }

        if($gambar){
            $query_insert = "update mahasiswa set nim='$nim', nama='$nama', email='$email', jurusan='$jurusan', gambar='$gambar' where id=$id";
            mysqli_query($conn, $query_insert);
        }

        return mysqli_affected_rows($conn);
    }

?>