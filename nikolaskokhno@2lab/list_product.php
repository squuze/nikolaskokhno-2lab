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
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <h5 class="mt-5 text-warning text-uppercase font-weight-bold">Product Catalog:</h5>
            <ul>
            <br />
          <?php
            if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_array($result);
              do {
                echo '
                <a href="product.php?id='.$row["id"].'">
                <div class="mt-2 bg-dark" style="overflow: hidden;">
                  <li class="border border-primary rounded">
                    <div class="mt-2 mb-2 ml-1 mr-3">
                      <b>'.$row["title_game"].'</b>
                      <b class="float-right">Price :
                      '.$row["price"].'</b>
                    </div>
                  </li>
                </div>
                </a>
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
