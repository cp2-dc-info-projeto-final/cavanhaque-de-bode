<?php
    session_start();
    include "../sql/conectamysqlcdb.php";

    echo $_SESSION['cliente'];
?>