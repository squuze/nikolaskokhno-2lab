<?php
    $procedureSelectGame = mysqli_query($link, "CALL selectGameProcedure");
    $selectGameArray = mysqli_fetch_array($procedureSelectGame);

 ?>
