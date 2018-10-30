<?php
  include 'connect_database.php';

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

      $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query($link, $query);
      $count = mysqli_num_rows($result);

      if ($count == 1) {
        $_SESSION['email'] = $email;
      }else {
        $fmsg = "ERROR";
      }
  }

  if (isset($_SESSION['email'])) {
    header("Location:/nikolaskokhno-2lab/nikolaskokhno@2lab/index.php");
    exit;
  }else {
    echo "error";
  }
?>
