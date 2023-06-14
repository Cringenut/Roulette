<?php
require "test.php";

isLogged();

if (!isset($_SESSION['bidding']))
{
    setBidding();
}
else
{
    getTotalBid();
    if (isset($_POST['btn']) && isset($_POST['amount']))
    {
        if (checkBid($_POST['amount']))
        {
            echo "pass";
            if (!array_key_exists($_POST['btn'], $_SESSION['bidding']))
            {
                echo "erre";
                $_SESSION['bidding'][$_POST['btn']] = $_POST['amount'];
            }
            else
            {
                echo "erre1";
                $_SESSION['bidding'][$_POST['btn']] += $_POST['amount'];
            }
        }
    }
}
var_dump($_SESSION['bidding']);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bidding</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="./../Visual/roulette/bidding.css" rel="stylesheet" type="text/css">
    <link href="../Visual/menu.css" rel="stylesheet" type="text/css">

</head>
    <body>
    <div class="box -menu">
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
    <form method="post">
    <div class="box-holder">
        <input type="text" name="amount" id="amount" placeholder="PLACE YOUR BID" onkeydown="check()">
        <div class="flex-container-bidding">
            <div class="box-zero"></div>
            <div class="flex-container-numbers">

                <?php $red = array(0, 2, 3, 5, 6, 8, 9, 11, 13, 16, 19, 22, 24, 26, 29, 30, 32, 35);
                        for ($i = 0; $i < 36; $i++) { ?>
                            <div class="box-number-parent" id="box">
                            <div class="box-number" id="box">

                                    <button <button type="submit" name="btn" class="box-number" value="<?php echo setNumber($i)?>">

                            </div>
                            <?php if (in_array($i, $red)) { ?>
                                <div class="oval-number-red">
                            <?php } else { ?>
                                <div class="oval-number-black">
                            <?php } ?>
                                <div class="text-number"><?php echo setNumber($i)?></div>
                                </div>
                                </div>
                            <?php } ?>

            </div>
        </div>
    </div>
    </form>

    <script>
        function check()
        {
            if (document.getElementById("username").value.length > 0) {
                var boxes = document.getElementsByClassName("box-number");
                for (let i = 0; i < 2; ++i) {
                    var item = boxes[i];
                    item.style.borderColor = "#ffcc00";
                }
                document.getElementById("signin").style.borderColor = "#ffcc00";
                document.getElementById("textsignin").style.color = "#ffcc00";
            }
            else {
                document.getElementById("signin").style.pointerEvents = "none";
                document.getElementById("textsignin").style.color = "#140e4a";
                document.getElementById("signin").style.borderColor = "#1f1f68";
            }
        }
    </script>

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




