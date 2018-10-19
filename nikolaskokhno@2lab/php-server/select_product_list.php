<?php

  include 'connect_database.php';

  $result = mysqli_query($link, "SELECT id, title_game, price, img_icon, genre FROM product");

?>
