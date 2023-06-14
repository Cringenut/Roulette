<?php
require "test.php";



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

                <?php $red = array(0, 2, 3, 5, 6, 8, 9, 11, 13, 16, 19, 22, 24, 26, 29, 30, 32, 35);
                for ($i = 0; $i < 36; $i++) { ?>
                    <?php if (in_array($i, $red)) { ?>
                        <div class="box-number">
                            <div class="oval-number-red">
                                <div class="text-number"><?php echo setNumber($i)?></div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="box-number">
                            <div class="oval-number-black">
                                <div class="text-number"><?php echo setNumber($i)?></div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
        </div>
    </div>

</body>

</html>




<?php

function setNumber($i)
{
    if (floor($i/12) == 0)
    {
        return 3+$i*3;
    }
    else if (floor($i/12) == 1)
    {
        return 2+$i%12*3;
    }
    else
    {
        return 1+$i%12*3;
    }
}