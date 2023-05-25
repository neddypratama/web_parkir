<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ParPol demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color: #00538E;"> <!-- Background page biru-->
    <div class="container-fluid">
        <div class="header my-5"> <!-- Header -->
            <div class="row d-flex text-center align-items-center justify-content-md-center">
                <div class="col-md-auto">
                    <img src="Logo.png" alt="" height="100" width="100">
                </div>
                <div class="col-md-auto">
                    <div style="width: 0px; height: 80px; border: 1px #FFFFFF solid;"></div>
                </div>
                <div class="col-md-auto text-start" style="color: white;">
                    <h3>SISTEM INFORMASI PARKIR ELEKTORNIK</h3><h3>POLITEKNIK NEGERI MALANG</h3>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="lahan-parkir d-flex text-center align-items-center justify-content-md-center">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6">
                        <div class="row row-cols-1">
                              <?php
                                include 'database.php';
                                
                                function select($query) {
                                    global $connect;

                                    $result = mysqli_query($connect, $query);
                                    $rows = [];

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    $rows[] = $row;
                                    }
                                    return $rows;
                                }
                                $lahan_parkir = select("SELECT * FROM lahan_parkir");
                                ?>
                            <?php
                                foreach($lahan_parkir as $parkir) :
                                  $sisa = $parkir['kapasitas'] - $parkir['jumlah_kosong'];
                                  if ($sisa <= 25) {
                                    ?>
                            <div class="col rounded-4 p-3 mb-2 bg-danger text-dark" >
                                <div class="row text-center align-items-center justify-content-md-center">
                                    <div class="col-sm-2">
                                        <h3><?php echo $parkir['nama']; ?></h3>
                                    </div>
                                    <div class="col-sm-2">
                                      <div><h2>-</h2></div>
                                    </div>
                                    <div class="col-sm-2" style="color: black;">
                                      <h3><?php echo $parkir['kapasitas'] - $parkir['jumlah_kosong']; ?></h3>
                                    </div>
                                </div>
                            </div>

                            <?php
                                  } elseif($sisa <= 50) {
                                    ?>
                            <div class="col rounded-4 p-3 mb-2 bg-warning text-dark" >
                              <div class="row text-center align-items-center justify-content-md-center">
                                  <div class="col-sm-2">
                                      <h3><?php echo $parkir['nama']; ?></h3>
                                  </div>
                                  <div class="col-sm-2">
                                    <div>
                                      <h2>-</h2>
                                    </div>
                                  </div>
                                  <div class="col-sm-2" style="color: black;">
                                    <h3><?php echo $parkir['kapasitas'] - $parkir['jumlah_kosong']; ?></h3>
                                  </div>
                              </div>
                            </div>

                            <?php
                                  } else {
                                    ?>
                            
                            <div class="col rounded-4 p-3 mb-2 bg-success text-dark" >
                              <div class="row text-center align-items-center justify-content-md-center">
                                  <div class="col-sm-2">
                                      <h3><?php echo $parkir['nama']; ?></h3>
                                  </div>
                                  <div class="col-sm-2">
                                    <div>
                                      <h2>-</h2>
                                    </div>
                                  </div>
                                  <div class="col-sm-2" style="color: black;">
                                    <h3><?php echo $parkir['kapasitas'] - $parkir['jumlah_kosong']; ?></h3>
                                  </div>
                              </div>
                            </div>
                            <?php
                                  }
                            
                            endforeach;?>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="footer text-center mt-5">
            <footer style="color: #FFFFFF">2023 © Sistem Informasi Parkir Elektronik Politeknik Negeri Malang</footer>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>