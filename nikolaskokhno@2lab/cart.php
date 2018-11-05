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

  </style>
  <body>
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
                            <li><a>1.Shopping cart</a></li>
                            <li><span>&rarr;</span></li>
                            <li><a>2.Contact info</a></li>
                            <li><span>&rarr;</span></li>
                            <li><a>3.Completion</a></li>
                          </ul>
                        </div>
                        <br />
                          <div class="row">
                            <div class="col-md-10">
                              <p class="">Step 1 of 3</p>
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

        case 'confirm':
          // code...
          break;

        case 'completion':
          // code...
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
