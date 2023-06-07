<?php

//include koneksi database
include('script/database.php');

//get data dari form
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];

//query insert data ke dalam database
if($id && $kode && $nama && $kapasitas !== null){
    $query = "INSERT INTO lahan_parkir (id, nama, kode, kapasitas) VALUES ('$id', '$nama', '$kode', '$kapasitas')";
    //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
    if($connect->query($query)) {

        //redirect ke halaman realtime1.php 
        header("location: realtime1.php");

    } else {

        //pesan error gagal insert data (soon create alert)
        echo 'error bos';

    }
}else{
    header("location: crud.php");
}

?>