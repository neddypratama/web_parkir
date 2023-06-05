<?php
    session_start();

    include "database.php";    

    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $status = $_POST["slide"];

    $query = "SELECT * FROM user WHERE email='$email' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $username = $row['id'];
    if($row['status'] == "1"){
        header("Location:../jurusanpark.php");
        $_SESSION["user"] = $username;
    }
    else if($row['status'] == "2"){
        header("Location:../crud.php");
        $_SESSION["user"] = $username;
    }
    else{
        header("Location:../login.php");
    }
    mysqli_close($connect);
?>