<?php

require "test.php";

unsetBidding();
isNotLogged();

if (isset($_POST['email']) && isset($_POST['login']) && isset($_POST['password']))
{
    if (checkData())
    {
        login();
        if ($_SESSION['login'])
        {
            header("Location: index.php");
        }
    }
}
function checkData()
{
    return filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && preg_match('/^[A-Za-z0-9]*$/', $_POST['login']) && preg_match('/^[A-Za-z0-9]*$/', $_POST['password']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Golden Star: registration</title>
<body onload="check();">
</body>

<link href="../Visual/registration/registration.css" rel="stylesheet" type="text/css">

<div class="img-background">
    <img class="img-background" src="../Visual/registration/png/registration.png"  alt="logo.png"/>
</div>

<a class="" href="index.php" target="_self">
    <div class="box-logo-holder">
        <img class="img-logo-big" src="../Visual/index/png/logo.png"  alt="logo.png"/>
    </div>
</a>

<form action = "" method = "post">

<div class="box-registration-holder">
    <div class="break"></div>
    <div class="box-register-login-holder">
        <div class="btn-sign-up-select">
            <div class="text-sign-up">SIGN UP</div>
        </div>
        <div class="break-login-register"></div>
        <a class="btn-sign-in-select" href="login.php" target="_self">
            <div class="btn-sign-in-select">
                <div class="text-sign-in">SIGN IN</div>
            </div>
        </a>
    </div>

    <div class="box-registration-text">
        <div class="text-registration"</div>REGISTRATION</div>
</div>


    <input type="text" name="email" id="email" onkeyup="check(this.value);" placeholder="E-mail">
    <div class="break"></div>
    <input type="text" name="login" id="login" onkeyup="check(this.value);" placeholder="Login">
    <div class="break"></div>
    <input type="text" name="password" id="password" onkeyup="check(this.value);" placeholder="Password">

    <div class="break"></div>
    <div class="break"></div>


    <button name="signup" id="signup" type="submit" class="btn-sign-up">
        <div class="text-btn-sign-up" id="textsignup" </div>SIGN UP</div>
    </button>

</form>

    <body>


    <script type="text/javascript">
        window.addEventListener('keydown',function(e) {
            if (e.keyIdentifier=='U+000A' || e.keyIdentifier=='Enter' || e.keyCode==13) {
                if (e.target.nodeName=='INPUT' && e.target.type=='text') {
                    e.preventDefault();

                    return false;
                }
            }
        }, true);
    </script>

    <script>
        function check()
        {
            if (document.getElementById("email").value.length > 0 && document.getElementById("login").value.length > 0 && document.getElementById("password").value.length > 0) {
                document.getElementById("signup").style.pointerEvents = "visible";
                document.getElementById("signup").style.borderColor = "#ffcc00";
                document.getElementById("textsignup").style.color = "#ffcc00";
            }
            else {
                document.getElementById("signup").style.pointerEvents = "none";
                document.getElementById("textsignup").style.color = "#140e4a";
                document.getElementById("signup").style.borderColor = "#1f1f68";
            }
        }

    </script>
    </body>
</html>





