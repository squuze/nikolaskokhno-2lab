<?php
include '../../php-server/connect_database.php';

if (isset($_POST['name']) && isset($_POST['password'])) {
  $email = $_POST ['email'];
  $name = $_POST ['name'];
  //$password = password_hash($_POST ['password'], PASSWORD_DEFAULT);
  $password = $_POST['password'];

  $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  $result = mysqli_query($link, $query);

  if($result){
    echo "Register success!";
    header("Location:/nikolaskokhno-2lab/nikolaskokhno@2lab/additionally/index.php");
  }else{
    echo "Error!";
  }
}

?>
