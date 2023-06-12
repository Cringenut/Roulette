<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Golden Star: registration</title>
    <body onload="check();">
    </body>

    <link href="../Visual/registration/registration.css" rel="stylesheet" type="text/css">

    <div class="img-background">
        <img class="img-background" src="../Visual/registration/png/registration. png"  alt="logo.png"/>
    </div>

    <a class="" href="index.php" target="_self">
        <div class="box-logo-holder">
            <img class="img-logo-big" src="../Visual/index/png/logo.png"  alt="logo.png"/>
        </div>
    </a>

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
    <form action = "" method = "post">

    </form>
    <a class="" href="" name="signin" id="signin" target="_self">
        <div class="btn-sign-up"></div>
    </a>

    </div>

    <input type="text" name="test" id="test" onkeypress="check(this.value);">
    Your value: <span id="result"> </span>
</head>


    <body>

    <

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
            document.getElementById("result").innerHTML = document.getElementById("email").value.length;

            if (document.getElementById("email").value.length > 0 && document.getElementById("login").value.length > 0 && document.getElementById("password").value.length > 0) {
                document.getElementById("email").style.color = 'red';
                document.getElementById("signin").style.pointerEvents = "visible";
            }
            else {
                document.getElementById("email").style.color = 'black';
                document.querySelector('#signin').disabled = true;
                document.getElementById("signin").style.pointerEvents = "none";
            }
        }

    </script>


    </body>

</html>




<?php

$validMail = false;

function checkMailExistence($address)
{
    echo "called";
    return filter_var($address, FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['email']) && isset($_POST['login']) && isset($_POST['password']))
{
    echo $_POST['email'];
    echo $_POST['login'];
    echo $_POST['password'];
}
else
{
    echo "non-set";
}


