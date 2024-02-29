<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "api";
    

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn){
            die("kondeksi tidak tersedia");
    }

    
?>