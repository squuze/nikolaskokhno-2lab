<?php
    $procedureSelectGame = mysqli_query($link, "CALL selectGameProcedure");
    $selectGameArray = mysqli_fetch_array($procedureSelectGame);

    $procedureCartUser = mysqli_query($link, "CALL cartProductUser");
    $cartProductUser = mysqli_fetch_array($procedureCartUser);

 ?>
