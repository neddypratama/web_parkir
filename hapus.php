<?php

include('script/database.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM lahan_parkir WHERE id = '$id'";

if($connect->query($query)) {
    header("location: realtime1.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>