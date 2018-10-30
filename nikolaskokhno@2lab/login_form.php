<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign-in NewGeneration</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  </head>
  <style media="screen">
    #message-auth{
      display: none;
    }
  </style>
  <body>
    <section class="boxed-sm mt-5">
      <div class="container">
        <div class="login-wrapper">
          <div class="row justify-content-md-center">
            <div class="col-md-6">
            <form class="" action="php-server/login_user.php" method="post">
              <h3 class="text-center">Sign-in</h3>
              <p class="bg-danger mt-3 mb-2 text-center" id="message-auth">
                <b class="">Wrong email or password!</b>
              </p>
              <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="Email" id="auth-login" class="form-control" name="email" placeholder="Enter you email..." required>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" id="auth-password" class="form-control" name="password" placeholder="Enter you password..." required>
              </div>
              <div class="form-group remember-me">
                <div class="checkbox pull-left">
                  <label>
                    <input type="checkbox" name="remember">
                    Remember-me
                  </label>
                </div>
                <a href="register_form.php" class="btn btn-primary pull-right"><b>Registration</b></a>
              </div>
              <div class="form-group form-footer text-center">
                <button id="btn-auth" class="btn btn-success circle border" type="submit" name="submit">Log-in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </section>


<?php include 'footer.php'; ?>



    <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
  <script scr="js/login_user.js"></script>
  </body>
</html>
