<?php
// Sisipkan file koneksi database
include 'conn.php';

// Mendapatkan id user dari request
$id = $_GET['id'];

// Buat query delete
$sql = "DELETE FROM `mahasiswa` WHERE `mahasiswa`.`id_mhs` = ".$id ."";

if ($conn->query($sql) === TRUE) {
    // Jika penghapusan berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Data berhasil dihapus'
    );
} else {
    // Jika terjadi kesalahan dalam penghapusan
    $response = array(
        'status' => 'error',
        'message' => 'Gagal menghapus data: ' . $conn->error
    );
}

// Mengubah response menjadi format JSON
echo json_encode($response);

// Menutup koneksi database
$conn->close();
?>
