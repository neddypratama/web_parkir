<?php

//include koneksi database
include('database.php');

//get data dari form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];

//query insert data ke dalam database
$query = "INSERT INTO lahan_parkir (id, nama, kapasitas) VALUES ('$kode', '$nama', '$kapasitas')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connect->query($query)) {

    //redirect ke halaman realtime1.php 
    header("location: realtime1.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>