<?php  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gastenboek</title>
    <link rel="stylesheet" href="views/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="header">
          <h2>Gastenboek</h2>
        </div>
      <div class="bericht">



              <?php foreach ($result as $key): ?>

                          <p>naam:
                            <?php echo $key['naam']?><p>


                          <p>email:
                          <?php echo $key['email']?><p>


                        <p>bericht:
                          <?php echo $key['bericht']?></p>
<hr>



                  <?php endforeach; ?>

      </div>
          <div class='buttondiv'>
            <a href="views/add/index.php"><input class="subbut" type="submit" name="submit" value="Bericht toevoegen"></a>
          </div>
    </div>
  </body>
  <!--  <table>


          <?php //foreach ($result as $key): ?>
                  <tr>
                      <td>naam: </td>
                        <td><?php// echo $key['naam']?></td>
                  </tr>
                  <tr>
                      <td>email: </td><br>
                      <td><?php// echo $key['email']?></td>
                  </tr>
                  <tr>
                    <td>bericht: </td><br>
                      <td><?php //echo $key['bericht']?></td>


                  </tr>
                  <tr>
                    <td><hr></td>
                  </tr>

              <?php //endforeach; ?>

      </table>-->
</html>
