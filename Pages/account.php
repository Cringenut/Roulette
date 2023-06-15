<?php
require "test.php";

unsetBidding();
isLogged();

if (isset($_POST['add']))
{
    if (preg_match('/^[0-9]*\.[0-9]{2}$/', number_format(floatval($_POST['add']), 2, '.', '')) &&
        floatval($_POST['add']) > 0)
    {
        changeBalance(floatval($_POST['add']));
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Golden Star: account</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="./../Visual/account/account.css" rel="stylesheet" type="text/css">
    <link href="../Visual/menu.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="img-background">
    <img class="img-background" src="../Visual/account/account.png"  alt="logo.png"/>
</div>

<div class="text-balance">
    <form method="post">
        <input type="text" name="add" id="add">
    </form>
</div>

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

            </div>
        <?php endif; ?>


        <div class="line"></div>
</div>

<div class="text-username-account"><?php echo $_SESSION['username']?></div>
<div class="text-balance-account"><?php echo number_format(floatval(getBalance($_SESSION['username'])), 2, '.'); ?>$</div>

</body>
</html>
