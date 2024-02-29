<?php
    //koneksi ke data base
    include "conn.php";

    //membuat query
    $sql = "SELECT * FROM mahasiswa";
    $query = mysqli_query ($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nama_pegawai"]. " ";

        $item[] = array (
            'nama'=>$data["nama_mhs"],
            'NIM'=>$data["nim"],
            'Alamat'=>$data["alamat"],
        );
    }

    $response = array(
        'status'=>'OK',
        'data'=> $item
    );


    echo json_encode($response);
?>