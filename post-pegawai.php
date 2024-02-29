<?php
    include "conn.php";

    $nama_mhs = isset($_POST['nama']) ? $_POST["nama"] : "";
    //echo $nama_mhs;
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
    //echo $alamat;
    $nim = isset($_POST['nim']) ? $_POST['nim'] : "";
    //echo $nim;
    

    $sql = "INSERT INTO `mahasiswa` (`id_mhs`, `nama_mhs`, `nim`, `alamat`) 
    VALUES (NULL, '".$nama_mhs."', '".$nim."', '".$alamat."');";


    $query = mysqli_query($conn,$sql);
    if($query){
        $msg = "Simpan data pegawai berhasil";
    }else{
        $msg = "simpan data pegawai gagal";
    }
    //echo $sql;
    //echo 'test';
    

?>

