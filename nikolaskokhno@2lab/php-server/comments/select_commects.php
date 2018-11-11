<?php
include '../connect_database.php';

$result_comment = mysqli_query($link,"SELECT comment, product.id, id_product, name
  FROM comments, product WHERE product_id = '$id' ");


?>
