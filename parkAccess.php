<!DOCTYPE html>
<html lang="en">

<?php

include('script/database.php');

$id = $_GET['id'];

$query = "SELECT * FROM lahan_parkir WHERE id = '$id' LIMIT 1";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_array($result);

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akses Lahan Parkir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="assets/img/Logo.png">
</head>

<body style="background-color: #00538E;"> <!-- Background page biru-->
  <div class="container-fluid">
    <div class="header my-5"> <!-- Header -->
      <div class="row d-flex text-center align-items-center justify-content-md-center">
        <div class="col-md-auto">
          <img src="assets/img/Logo.png" alt="" height="100" width="100">
        </div>
        <div class="col-md-auto">
          <div style="width: 0px; height: 80px; border: 1px #FFFFFF solid;"></div>
        </div>
        <div class="col-md-auto text-start" style="color: white;">
          <h3>SISTEM INFORMASI PARKIR ELEKTORNIK</h3>
          <h3>POLITEKNIK NEGERI MALANG</h3>
        </div>
      </div>
    </div>
    <div class="body">
    <div class="container text-center">
      <div class="row justify-content-md-center">
        <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end pb-3">
          <a href="login.php">
            <button type="button" class="btn btn-danger me-md-2">Logout</button>
          </a>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="wrapper">
          <div class="col-12">
            <h3 style="font-size: 20px; font-weight:500;"><?php echo $row['id']; ?></h3>
            <h5 style="font-size: 30px; font-weight:700;"><?php echo $row['nama']; ?></h5>
          </div>
          <div class="col-12">
            <p style="font-size: 16px; font-weight:500;">SISA LAHAN TERSEDIA:</p>
            <h1 style="font-size: 80px; font-weight:700;" class="p-4"><?php echo $row['kapasitas'] - $row['jumlah_kosong']; ?></h1>
          </div>
          <div class="col-12">
            <?php 
              if($row['kapasitas'] - $row['jumlah_kosong'] == 0){ ?>
                <a href=""><button type="button" class="btn btn-success col-4" disabled>Masuk</button></a>
                <a href="keluar.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-warning col-4">Keluar</button></a>
            <?php 
              }elseif($row['jumlah_kosong'] == 0 ){ ?>
                <a href="masuk.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-success col-4">Masuk</button></a>
                <a href=""><button type="button" class="btn btn-warning col-4" disabled>Keluar</button></a>
            <?php 
              }elseif($row['jumlah_kosong'] < $row['kapasitas'] ){ ?>
                <a href="masuk.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-success col-4">Masuk</button></a>
                <a href="keluar.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-warning col-4">Keluar</button></a>
            <?php
              }
            ?> 
          </div>
        </div>
      </div>
    </div>

  <footer>
    <div class="footer text-center mt-5">
      <p style="color: #FFFFFF">2023 © Sistem Informasi Parkir Elektronik Politeknik Negeri Malang</p>
    </div>
  </div>
  </footer>

  <script>
        $('document').ready(function () {
            setInterval(function() {
                getParkir()
            }, 500);
        });

        function getParkir() {
            $.ajax({
                url: "realtime-parkir.php",
                type: "GET",
                success: function(response) {
                    $('#real-time').html(response)
                }
            });
        }
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>