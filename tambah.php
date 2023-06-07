<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ParPol demo</title>
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
    <div class="body"> <!-- Isi -->
      <div class="form-tambah d d-flex align-items-center justify-content-md-center">
        <form action="tambahproses.php" method="post">
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <div class="row row-cols-1">
                <div class="col">
                  <div class="row row-cols-2">
                    <div class="col-4 text-light p-2 m-1 fw-bold">ID LAHAN</div>
                    <div class="col-7 bg-light rounded-4 p-2 m-1">
                      <input type="text" name="id" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="row row-cols-2">
                    <div class="col-4 text-light p-2 m-1 fw-bold">KODE LAHAN</div>
                    <div class="col-7 bg-light rounded-4 p-2 m-1">
                      <input type="text" name="kode" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="row row-cols-2">
                    <div class="col-4 text-light p-2 m-1 fw-bold">NAMA LAHAN</div>
                    <div class="col-7 bg-light rounded-4 p-2 m-1">
                      <input type="text" name="nama" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="row row-cols-2">
                    <div class="col-4 text-light p-2 m-1 fw-bold">KAPASITAS</div>
                    <div class="col-7 bg-light rounded-4 p-2 m-1">
                      <input type="number" name="kapasitas" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col mt-4 d-flex align-items-center justify-content-md-end">
                  <a href="realtime1.php"><button class="rounded mx-1 btn fw-semibold" style="background-color: #CC0000; color:#FFFFFF;">Cancel</button></a>
                  <button type="submit" class="rounded mx-1 btn fw-semibold" style="background-color: #39B400;color:#FFFFFF;">Save</button>
                </div>
              </div>
            </div>
            <div class="col"></div>
          </div>
        </form>
      </div>
    </div>
    <div class="footer text-center mt-5"> <!-- Footer -->
      <footer style="color: #FFFFFF">2023 © Sistem Informasi Parkir Elektronik Politeknik Negeri Malang</footer>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>