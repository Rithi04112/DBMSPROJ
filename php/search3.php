<?php 
    session_start();
    session_destroy();
    header("Location: ../searchOOPS.php");
?>