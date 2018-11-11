<?php
include 'php-server/connect_database.php';
include 'header.php';
include 'php-server/comments/main.php';

$id = ($_GET['id']);
$result_product = mysqli_query($link, "SELECT * FROM product WHERE id = '$id' ");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php $row["title_game"] ?></title>
  </head>
  <body>
    <?php
      if (mysqli_num_rows($result_product) > 0) {
        $row1 = mysqli_fetch_array($result_product);
        do {
          echo '
            <div class="product_page">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="title_game">
                      <h4 class="mt-3 ml-2">'.$row1["title_game"].'</h4>
                    </div>
                    <div class="img_game">
                      <div class="mt-3 ml-2">
                        <img src="'.$row1["img_icon"].'">
                      </div>
                    </div>
                    <div class="inf_game">
                      <div class="genre mt-2 ml-2">
                        <h5><b>Genre : </b>'.$row1["genre"].' </h5>
                      </div>
                      <div class="languege mt-2 ml-2">
                        <h5><b>Languege : </b>'.$row1["languege"].' </h5>
                      </div>
                      <div class="publisher mt-2 ml-2">
                        <h5><b>Publisher : </b>'.$row1["publisher"].' </h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col-lg-7">
                        <div class="game_inf">
                          <div class="availability">
                            <div class="mt-5">
                              <h5><b>Availability : </b>'.$row1["availability"].' </h5>
                            </div>
                          </div>
                          <div class="delivery_email mt-2">
                            <h5><b>Instant delivery by e-mail</b></h5>
                          </div>
                          <div class="activation_steam">
                            <h5><b>License key activation in STEAM</b></h5>
                          </div>
                          <div class="discount">
                            <h5><b>Cumulative discount of up to 10%</b></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-5">
                        <div class="price_game">
                          <div class="price mt-5 ml-2">
                            <h5><b>Price : </b>'.$row1["price"].' </h5>
                          </div>
                          <div class="button_by">
                            <div class="btn-group mt-2 ml-2">
                              <a class="btn btn-success" id="addCart_'.$row1["id"].'">Buy game</a>
                              <a class="btn btn-danger">❤</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="description">
                          <h4><b>Description : </b>'.$row1["description"].'</h4>
                        </div>
                        <div class="mt-5 feature">
                          <h4><b>Feature : </b>'.$row1["feature"].'</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          ';
        } while ($row1 = mysqli_fetch_array($result_product));
      }
      COMMENTS();

      $result_comment = mysqli_query($link,"SELECT comment, product.id, id_product, name
        FROM comments, product, users WHERE '$id' = id_product ORDER BY id_product");

        if (mysqli_num_rows($result_comment) > 0) {
          $row2 = mysqli_fetch_array($result_comment);
          do {
            echo '
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">

                  </div>
                  <div class="col-lg-8">
                    <div class="coment-user mt-2 mb-2 bg-light border rounded">
                      <div class="container">
                        <div class="row">
                          <div class="name-user mt-3 mb-3 ml-3 mr-2">
                            <b>'.$row2["name"].': </b>
                          </div>
                          <div class="comment-user mt-3 mb-3">
                            '.$row2["comment"].'
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            ';
          } while ($row2 = mysqli_fetch_array($result_comment));
        }
    ?>
  </body>
</html>
