<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web-shop NewGeneration</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  </head>
  <style media="screen">
    .carousel-inner img {
      height: auto;
      width: 100%;

    }

    .carousel-inner h1{
      background-color: rgba(20, 49, 68, 0.6);
      padding: 20px;
      font-size: 50px;
    }

    .carousel-inner p{
      font-size: 20px;
      background-color: rgba(30, 29, 29, 0.6);
      padding: 20px;
    }
  </style>
  <body>
    <wrapper>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/slider1.jpg" alt="First slide">
            <div class="carousel-caption">
              <h1 class="text-uppercase">Adapting carousel in Bootstrap 4</h1>
              <p>Random text in text carousel bootstrap 4 in my hard</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider3.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="img/slider4.jpg" alt="Third slide">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


    </wrapper>


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

<?php
  include 'footer.php';
?>
