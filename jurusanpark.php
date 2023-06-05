<!DOCTYPE html>
<html>
<?php
include 'script/database.php';

function query($query){
  global $connect;
  $result = mysqli_query($connect, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
$lahan_parkir = query("SELECT id, nama FROM lahan_parkir");


?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
      <div class="lahan-parkir d-flex text-center align-items-center justify-content-md-center">
        <div class="container row col-12">
          <div class="col-12">
            <h4 style="color:#FFFFFF; font-weight: bold;">PILIH LAHAN PARKIR</h4>
          </div>
          <?php foreach($lahan_parkir as $row) : ?>
            <a href="parkAccess.php?id=<?php echo $row['id'] ?>" class="col-6 my-3">
              <div class="card">
                <div class="card-body">
                  <span class="h3"><?= $row["nama"]?></span>
                </div>
              </div>
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="footer text-center mt-5">
        <p style="color: #FFFFFF">2023 © Sistem Informasi Parkir Elektronik Politeknik Negeri Malang</p>
      </div>
    </div>
    </footer>
</body>

</html>