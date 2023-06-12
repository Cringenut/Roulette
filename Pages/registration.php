
<?php
var_dump(($_POST));
var_dump($_GET['email']);
var_dump($_POST['email']);

function checkMailExistence($address)
{
    echo "called";
    return filter_var($address, FILTER_VALIDATE_EMAIL);
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
    <img class="img-background" src="../Visual/registration/png/registration. png"  alt="logo.png"/>
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


    <button name="signup" id="signup" type="submit" class="btn-sign-up"></button>

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
            if (document.getElementById("email").value.length > 0) {
                document.querySelector('#signup').disabled = false;
                document.getElementById("signup").style.pointerEvents = "visible";
            }
            else {
                document.querySelector('#signup').disabled = true;
                document.getElementById("signup").style.pointerEvents = "none";
            }
        }

    </script>


    </body>

</html>





