<?php include 'php-server/select_product_list.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List game NewGeneration</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div class="list_product">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul>
              <br />
          <?php
            if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_array($result);

              do {
                echo '
                <div class="mt-2 bg-info" style="overflow: hidden;">
                  <li class="border border-primary rounded">
                    <div class="mt-2 mb-2 ml-1 mr-3">
                      '.$row["title_game"].'
                      <b class="float-right">Price :
                      '.$row["price"].'</b>
                    </div>
                  </li>
                </div>
                ';
              } while ($row = mysqli_fetch_array($result));
            }
          ?>
            </ul>
          </div>
        </div>
      </div>
    </div>




    <?php include 'footer.php'; ?>
  </body>
</html>
