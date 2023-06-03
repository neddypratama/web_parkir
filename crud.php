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
                            <div class="tambah-lahan col rounded-4 p-3 mb-2 d-flex text-center align-items-center justify-content-md-end">
                                <a href="tambah.php">
                                    <button class="rounded-start-pill p-2 btn" style="background-color: #39B400;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill=" white" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                        <span class="text-light fw-semibold">Add</span>
                                    </button>
                                </a>
                            </div>
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
                            ?>
                            <div class="col rounded-4 p-3 mb-2 bg-light text-dark" >
                                <div class="row align-items-center justify-content-md-center">
                                    <div class="col-sm-2">
                                        <h5><?php echo $parkir['nama']; ?></h5>
                                    </div>
                                    <div class="col-sm-1">
                                        <div style="width: 0px; height: 20px; border: 1px #000000 solid;"></div>
                                    </div>
                                    <div class="col-sm-1" style="color: black;">
                                        <h5><?php echo $parkir['kapasitas'] - $parkir['jumlah_kosong']; ?></h5>
                                    </div>
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-1" style="color: white;">
                                        <a href="edit.php?id=<?php echo $parkir['id'] ?>">
                                            <button class="rounded btn p-2" style="background-color: #DBAB00;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-sm-1" style="color: white;">
                                        <a href="hapus.php?id=<?php echo $parkir['id'] ?>">
                                            <button class="rounded btn p-2" style="background-color: #CC0000;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
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