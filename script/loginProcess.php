<?php

    include "database.php";    

    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $status = $_POST["slide"];

    $query = "SELECT * FROM user WHERE email='$email' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $username = $row['id'];
    if($status == 1 && $email == $row['email'] && $status == $row['status']){
        header("Location:../jurusanpark.php");
    }
    else if($status == 2 && $email == $row['email'] && $status == $row['status']){
        header("Location:../realtime1.php");
    }
    else{
        header("Location:../login.php");
    }

?>