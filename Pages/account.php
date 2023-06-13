<?php
    require "test.php";

    if (isset($_SESSION['logged']) == null)
    {
        header("Location: login.php");
    }
?>
