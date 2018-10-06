<?php

$link = mysqli_connect('localhost', 'root', '', 'nikolaskokhno@2lab');

if(!$link){
  echo "Connect database is fail!", mysqli_connect_error();
  exit();
}
?>
