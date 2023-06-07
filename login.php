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

<body> <!-- Background page biru-->
  <div class="container-fluid" style="padding: 0">
    <div class="header rounded-5 rounded-top-0 py-4 bg-light"> <!-- Header -->
      <div class="row row-col-1 d-flex text-center align-items-center justify-content-md-center">
        <div class="col-md-auto">
          <img src="assets/img/Logo.png" alt="" height="120" width="120">
        </div>
      </div>
      <div class="row row-col-1 my-1 d-flex text-center align-items-center justify-content-md-center">
        <div class="col-md-auto text-start" style="color: #00538E;">
          <h3 class="fw-bold">SISTEM INFORMASI</h3>
          <h3 class="fw-bold">PARKIR ELEKTORNIK</h3>
        </div>
      </div>
      <div class="row row-col-1 my-1 d-flex text-center align-items-center justify-content-md-center">
        <div class="col-md-auto text-start">
          <h3 class="fw-bold rounded-4" style="color: white; background: #00538E; padding: 8px 16px;">POLITEKNIK NEGERI MALANG</h3>
        </div>
      </div>
    </div>
    <div class="body py-5">
      </div>
      <div class="row row-col-1 d-flex text-center align-items-center justify-content-md-center">
        <div class="col-md-auto">
          <div class="login-container">
            <div class="wrapper">
              <div class="title-text">
                <div class="title staff">LOGIN</div>
              </div>
              <div class="form-container">
                <div class="form-inner">
                  <form action="script/loginProcess.php" class="login" method="POST">
                    <div class="slide-controls">
                      <input type="radio" name="slide" value="1" id="login" checked>
                      <input type="radio" name="slide" value="2" id="loginAdmin">
                      <label for="login" class="slide login">Staff Parkir</label>
                      <label for="loginAdmin" class="slide loginAdmin">Admin</label>
                      <div class="slider-tab"></div>
                    </div>
                    <div class="field">
                      <input type="text" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="field">
                      <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="field btn my-5">
                      <input type="submit" value="Login">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
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