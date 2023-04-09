<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parkir Polinema</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
  
  <body>
    <h1>Lahan Parkir Polinema</h1>
    
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

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Lahan Parkir</th>
          <th scope="col">Kapasitas Lahan</th>
        </tr>
      </thead>
      <tbody id="real-time">
        
      </tbody>
      
      
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>