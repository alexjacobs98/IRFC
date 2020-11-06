<?php

    include("classes\dbh.class.php");

    $dbh = new DBH();

    echo($dbh->GetConnection());


?>