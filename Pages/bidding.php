<?php
require "test.php";

session_start();
if (isset($_SESSION['logged']) == null)
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bidding</title>
    <link href="./../Visual/roulette/bidding.css" rel="stylesheet" type="text/css">
    <link href="../Visual/menu.css" rel="stylesheet" type="text/css">

</head>
    <body>
    <div class="box-menu">
        <div class="line"
        <div class="btn-logo"></div>
        <a class="btn-logo" href="index.php" target="_self">
            <div class="img-logo">
                <img class="img-logo" src="../Visual/index/png/logo.png"  alt="logo.png"/>
            </div>

            <a class="box-login" href="login.php" target="_self"></a>
            <a class="btn-sign-up" href="registration.php" target="_self"></a>


            <div class="box-holder">

    </div>



    </div>
    <div class="box-holder">
        <div class="flex-container-bidding">
            <div class="box-zero"></div>
            <div class="flex-container-numbers">
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>

                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>

                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>
                <div class="box-number-red"></div>
                <div class="box-number-green"></div>

                <div class="box-number-part"></div>
                <div class="box-number-part"></div>
                <div class="box-number-part"></div>

            </div>
    </div>
    </div>

</body>

</html>




<?php
