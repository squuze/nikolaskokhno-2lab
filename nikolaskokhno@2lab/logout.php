<?php

require 'php-server/connect_database.php';

unset($_SESSION['email']);
header("Location:index.php");
exit;

?>
