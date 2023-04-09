
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
        <tr>
            <th scope="row"><?php echo $parkir['id']; ?></th>
            <td><?php echo $parkir['nama']; ?></td>
            <td><?php echo $parkir['kapasitas']; ?></td>
            <td>
                <a href="masuk.php?id=<?php echo $parkir['id'] ?>"><button type="button" class="btn btn-primary">Masuk</button></a>
                <a href="keluar.php?id=<?php echo $parkir['id'] ?>"><button type="button" class="btn btn-secondary">Keluar</button></a>
            </td>
        </tr>
        <?php endforeach;?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>