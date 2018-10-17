<?php
  include('connect_database.php');

  if (isset($_POST['username']) && isset($_POST['password'])) {
    $email = $_POST ['email'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $query = "INSERT INTO users (email, name, password) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($link, $query);

    if($result){
      echo "Register success!";
    }else{
      echo "Error!";
    }
  }


?>
