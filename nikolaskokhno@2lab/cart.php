<?php
  //include 'php-server/connect_database.php';
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shopping cart</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  </head>
  <style>
    .name-step li{
      float: left;
      margin-left: 10px;
      list-style-type: none;
    }

    #input-count-style input{
      border: 1px solid #DDDDDD;
      width: 32px;
      font: 15px sans-serif;
      border-radius: 5px;
      text-align: center;
    }

    #count-style{
      cursor: pointer;
      font: 15px sans-serif;
      margin: 1px;
    }

  </style>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="title-cart mt-3 mb-2 text-center">
            <h3>Cart product</h3>
          </div>
        </div>
      </div>
    </div>
    <?php
      $action = $_GET["action"];

      switch ($action) {
        case 'oneclick':
          echo '
            <div id="cart-list" class="mt-3 mb-3">
              <div class="container">
                <div="row">
                  <div class="col-md-8  bg-success border border-danger rounded text-white">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="name-step">
                          <ul>
                            <li><a class="text-dark font-weight-bold">1.Shopping cart</a></li>
                            <li><span>&rarr;</span></li>
                            <li><a>2.Contact info</a></li>
                            <li><span>&rarr;</span></li>
                            <li><a>3.Completion</a></li>
                          </ul>
                        </div>
                        <br />
                          <div class="row">
                            <div class="col-md-10">
                              <p class="font-weight-bold">Step 1 of 3</p>
                            </div>
                            <div class="col-md-2">
                              <a type="button" class="btn btn-danger btn-sm" href="cart.php?action=clear">Clear</a>
                            </div>
                          </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          ';

          $result = mysqli_query($link,"SELECT * FROM cart, product WHERE  product.id = cart.cart_id");


          if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);

            echo '
            <div class="product-cart-title">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 bg-light border rounded">

                    <div class="row">
                      <div class="col-md-2">
                        <div class="text-img-product font-weight-bold text-center mt-1">
                          Image
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="title-game font-weight-bold text-center mt-1">
                          Title game
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="quantity-product-title font-weight-bold text-center mt-1">
                          Description
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="price-product-title font-weight-bold text-center mt-1">
                          Price
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="title-button-clear-price font-weight-bold text-center mt-1">
                          DELETE
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>

            ';

            do {
              echo '
                <div class="product-cart mt-2">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-8 bg-light border rounded">

                        <div class="row">
                        <div class="col-md-2">
                          <div class="img-product text-center mt-1 mb-1">
                            <img src="'.$row["img_icon"].'" width="60px;"/>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="title-game-product text-center mt-4">
                            '.$row["title_game"].'
                          </div>
                        </div>

                        <div class="col-md-3 mt-1">
                          <div class="publisher">
                            <b>Publisher: </b>'.$row["publisher"].'
                          </div>
                          <div class="genre">
                            <b>Genre: </b>'.$row["genre"].'
                          </div>
                        </div>

                        <div class="col-md-2 mt-4">
                          <div class="price-product-title text-center mt-1">
                            '.$row["price"].' <b>руб.</b>
                          </div>
                        </div>

                        <div class="col-md-2 mt-3">
                          <div class="button-clear-price mt-1 text-center">
                            <a type="button" class="btn btn-danger btn-sm">X</a>
                          </div>
                        </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              ';


            } while ($row = mysqli_fetch_array($result));
          }else {
            echo '
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <div class="text-empty-cart text-center bg-danger border rounded">
                      <h3 class="mt-3 mb-3">You cart empty!</h3>
                    </div>
                  </div>
                </div>
              </div>
            ';
          }

          echo '
            <div class="footer-cart mt-3 mb-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 bg-success border border-danger rounded text-white">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-10 mt-3 mb-3">
                          <b>Total: </b>
                        </div>
                        <div class="col-md-2 button-next mt-1 mb-1">
                          <a type="button" class="btn btn-primary btn-sm">Next</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          ';



          break;

        case 'confirm':
        echo '
          <div id="cart-list" class="mt-3 mb-3">
            <div class="container">
              <div="row">
                <div class="col-md-8  bg-success border border-danger rounded text-white">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="name-step">
                        <ul>
                          <li><a>1.Shopping cart</a></li>
                          <li><span>&rarr;</span></li>
                          <li><a class="text-dark font-weight-bold">2.Contact info</a></li>
                          <li><span>&rarr;</span></li>
                          <li><a>3.Completion</a></li>
                        </ul>
                      </div>
                      <br />
                        <div class="row">
                          <div class="col-md-10">
                            <p class="font-weight-bold">Step 2 of 3</p>
                          </div>
                          <div class="col-md-2">
                            <a type="button" class="btn btn-danger btn-sm" href="cart.php?action=clear">Clear</a>
                          </div>
                        </div>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        ';
          break;

        case 'completion':
        echo '
          <div id="cart-list" class="mt-3 mb-3">
            <div class="container">
              <div="row">
                <div class="col-md-8  bg-success border border-danger rounded text-white">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="name-step">
                        <ul>
                          <li><a>1.Shopping cart</a></li>
                          <li><span>&rarr;</span></li>
                          <li><a>2.Contact info</a></li>
                          <li><span>&rarr;</span></li>
                          <li><a class="text-dark font-weight-bold">3.Completion</a></li>
                        </ul>
                      </div>
                      <br />
                        <div class="row">
                          <div class="col-md-10">
                            <p class="font-weight-bold">Step 3 of 3</p>
                          </div>
                          <div class="col-md-2">
                            <a type="button" class="btn btn-danger btn-sm" href="cart.php?action=clear">Clear</a>
                          </div>
                        </div>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        ';
          break;
        default:
          // code...
          break;
      }
    ?>
  </body>
    <?php
      include 'footer.php';
    ?>

    <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
  </body>
</html>
