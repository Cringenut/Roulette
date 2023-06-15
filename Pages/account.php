<?php
require "test.php";

unsetBidding();
isLogged();
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

</body>
</html>
