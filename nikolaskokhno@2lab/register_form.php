<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration NewGeneration</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  </head>
  <body>
    <section class="boxed-sm mt-5">
      <div class="container">
        <div class="login-wrapper">
          <div class="row justify-content-md-center">
            <div class="col-md-6">
            <form class="" action="php-server/register_user.php" method="post">
              <h3 class="text-center">Registration</h3>
              <div class="form-group mb-2">
                <label for=""><b>Email</b></label>
                <input type="Email" class="form-control" name="email" placeholder="Enter you email..." required>
              </div>
              <div class="form-group">
                <label for=""><b>Username</b></label>
                <input type="text" class="form-control" name="username" placeholder="Enter you username..." required>
              </div>
              <div class="form-group">
                <label for=""><b>Password</b></label>
                <input type="password" class="form-control" name="password" placeholder="Enter you password..." required>
              </div>
              <div class="form-group">
                <label for=""><b>Re-enter password</b></label>
                <input type="password" class="form-control" name="password" placeholder="Please enter password again..." required>
              </div>
              <div class="form-group remember-me">
                <div class="checkbox pull-left">
                  <label>
                    <input type="checkbox" name="remember">
                    Remember-me
                  </label>
                </div>
                <div class="pull-right">
                  <a href="sign-in.html">Sign-in</a>
                </div>
              </div>
              <br />
              <hr />

              <div class="form-group form-footer pull-right">
                <button class="btn btn-primary circle border">For home</button>
                <button class="btn btn-danger circle border" type="submit">Registration</button>
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
  </body>
</html>
