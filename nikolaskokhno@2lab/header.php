<?php include 'php-server/connect_database.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  </head>
  <body>
    <?php if(isset($_SESSION['email'])) : ?>
    <nav class="navbar navbar-expand-xl bg-dark scrolling-navbar">
      <div class="container">
        <a href="#" class="navbar-brand"><b class="brandLogo">New Generation</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="
        myNav" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="#myNav">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a href="index.php" class="nav-link waves-effect waves-light"><button class="btn btn-outline-primary btn-sm">Home</button></a>
            </li>
            <li class="nav-item">
              <a href="#newGames" class="nav-link waves-effect waves-light"><button class="btn btn-warning btn-sm">New Games</button></a>
            </li>
            <li class="nav-item">
              <a href="list_product.php" class="nav-link waves-effect waves-light"><button class="btn btn-outline-primary btn-sm">List game</button></a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link waves-effect waves-light"><button class="btn btn-outline-primary btn-sm">Contact</button></a>
            </li>
          </ul>
            <div class="buttonLogin">
              <a href="logout.php" type="button" name="login_user" class="btn btn-success btn-sm"><i class="fa fa-sign-in"></i> Exit</a>
          </div>
        </div>
      </div>
    </nav>

  <?php else : ?>
    <nav class="navbar navbar-expand-xl bg-dark scrolling-navbar">
      <div class="container">
        <a href="#" class="navbar-brand"><b class="brandLogo">New Generation</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="
        myNav" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="#myNav">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a href="index.php" class="nav-link waves-effect waves-light"><button class="btn btn-outline-primary btn-sm">Home</button></a>
            </li>
            <li class="nav-item">
              <a href="#newGames" class="nav-link waves-effect waves-light"><button class="btn btn-warning btn-sm">New Games</button></a>
            </li>
            <li class="nav-item">
              <a href="list_product.php" class="nav-link waves-effect waves-light"><button class="btn btn-outline-primary btn-sm">List game</button></a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link waves-effect waves-light"><button class="btn btn-outline-primary btn-sm">Contact</button></a>
            </li>
          </ul>
            <div class="buttonLogin">
              <a href="login_form.php" type="button" name="login_user" class="btn btn-success btn-sm"><i class="fa fa-sign-in"></i> Login</a>
          </div>
        </div>
      </div>
    </nav>
  <?php endif;  ?>
  </body>
</html>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
