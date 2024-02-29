<?php

    include "conn.php";

  //  echo "update mhs";

    $id = $_GET['id'];
   // echo $id;

   $nama_mhs = isset($_POST["nama"]) ? $_POST['nama'] : "";  //Mengambil nilai dari
   //echo $nama_mhs;

   $nim = isset($_POST["nim"]) ? $_POST['nim'] : "";
   //echo $umur;

   $alamat = isset($_POST["alamat"]) ? $_POST['alamat'] : "";

    $sql = "UPDATE `mahasiswa` SET `nama_mhs` = '".$nama_mhs."', `nim` = '".$nim."', `alamat` = '".$alamat."' 
    WHERE `mahasiswa`.`id_mhs` = ".$id.";";
    //echo $sql;

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "update mhs berhasil";
    }else{
        $msg = "update mhs gagal";
    }

    $response = array(
        "status"=> "success",
        "message" => $msg
    );

    echo json_encode($response);

?>