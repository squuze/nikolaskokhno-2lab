<?php

  include 'connect_database.php';

  if (isset($_POST['full_user_name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $full_user_name = $_POST['full_user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO order(full_name, email, phone) VALUES('$full_user_name', '$email', '$phone')";
    $result = mysqli_query($link, $query);

    if ($result) {
      echo "success";
    }else {
      echo "error";
    }
  }

?>
