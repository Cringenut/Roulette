<?php

require "test.php";

unsetBidding();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Golden Star</title>
        <link href="./../Visual/index/index.css" rel="stylesheet" type="text/css">
        <link href="../Visual/menu.css" rel="stylesheet" type="text/css">
        <link href="./../Visual/index/main.css" rel="stylesheet" type="text/css">
    </head>

    <style>
        div.both:hover .text-username { color: white }
        div.both:hover .text-balance { color: white }
    </style>

    <body>
        <div class="box-menu">
            <div class="btn-logo"></div>
                <a class="btn-logo" href="index.php" target="_self">
                <div class="img-logo">
                    <img class="img-logo" src="../Visual/index/png/logo.png"  alt="logo.png"/>
                </div>


                    <?php if(isset($_SESSION['logged']) == null) : ?>
                        <a class="box-login" href="login.php" target="_self"></a>
                        <a class="btn-sign-up" href="registration.php" target="_self"></a>
                    <?php else : ?>
                        <a class="" href="" target="_self"></a>
                        <div class="box-user-holder">

                            <a href="account.php">
                                <div class="both">
                                    <div class="text-username" id="account"><?php echo $_SESSION['username']?></div>
                                    <div class="text-balance" id="account"><?php
                                    echo number_format(floatval(getBalance($_SESSION['username'])), 2, '.');
                                    echo "$"?>
                                    </div>
                                </div>
                                    <a href="logout.php">
                                        <div class="btn-log-out" id="account"></div>
                                    </a>

                            </a>
                        </div>
                    <?php endif; ?>


                    <div class="line"></div>
        </div>


        <div class="box-holder">
            <img class="box-image" src="../Visual/index/png/main.png"  alt="Desc"/>
                <a class="box-image" href="bidding.php" target="_self"></a>
            <div class="img-roulette">
                <img class="img-roulette" src="../Visual/index/png/roulette.png"  alt="logo.png"/>
            </div>

            <p class="text-bottom-desc">a timeless casino game offers an exhilarating experience for players seeking the thrill of chance</p>
            <p class="text-bottom-play">PLAY NOW</p>
        </div>

    </body>


</html>





