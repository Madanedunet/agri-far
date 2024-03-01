<?php
    session_start();
    unset($_SESSION['email']);
    header ("http://localhost/agri/index.php");


?>