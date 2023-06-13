<?php
require "test.php";

session_start();
if (isset($_SESSION['logged']) == null)
{
    header("Location: login.php");
}
?>