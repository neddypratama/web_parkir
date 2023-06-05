<?php

include 'script/database.php';
$id = $_GET['id'];

function select($query) {
    global $connect;

    $result = mysqli_query($connect, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$lahan_parkir = select("SELECT * FROM lahan_parkir WHERE id = '$id'");

foreach($lahan_parkir as $parkir) :
$sisa = (int)$parkir['jumlah_kosong'] + 1;

endforeach;

$query2 = "UPDATE lahan_parkir SET jumlah_kosong = '$sisa' WHERE id = '$id'";

if (mysqli_query($connect, $query2)) {
    header('Location:parkAccess.php?id='.$id);
}
?>
