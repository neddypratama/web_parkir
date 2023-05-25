<?php

//include koneksi database
include('database.php');

//get data dari form
$id     = $_POST['kode'];
$nama         = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE lahan_parkir SET nama = '$nama', kapasitas = '$kapasitas' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connect->query($query)) {
    //redirect ke halaman index.php 
    header("location: realtime1.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>