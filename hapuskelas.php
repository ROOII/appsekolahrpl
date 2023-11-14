<?php
    include_once 'config.php';
    $id = isset($_GET['id'])?$_GET['id']:"";
    $hapus = mysqli_query($conn, "DELETE FROM tbkelas WHERE idkelas=$id");
    if($hapus){
        echo "<script>alert('hapus berhasil');location.href='?hal=tampilkelas';</script>";
    }
?>