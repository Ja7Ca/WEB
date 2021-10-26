<?php
    require('function.php');

    $id = $_GET['id'];

    if(delete($id)){
        echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'no4.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'no4.php';
        </script>";
    }
?>