<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parkir Polinema</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  
  <body>
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
    <h1>Lahan Parkir Polinema</h1>
    
    <?php
    
    ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Lahan Parkir</th>
          <th scope="col">Kapasitas Lahan</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($lahan_parkir as $parkir) :
        ?>
        <tr>
          <th scope="row"><?php echo $parkir['id']; ?></th>
          <td><?php echo $parkir['nama']; ?></td>
          <td><?php echo $parkir['kapasitas']; ?></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>