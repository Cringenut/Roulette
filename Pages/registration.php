<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Golden Star: registration</title>
    <link href="../Visual/registration/registration.css" rel="stylesheet" type="text/css">



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
    <input type="text" name="email" id="email" onkeyup="checkEmail(this.value);" placeholder="E-mail">
    <div class="break"></div>
    <input type="text" placeholder="Login">
    <div class="break"></div>
    <input type="password" placeholder="Password">
    <div class="break"></div>

    <div class="wrapper">
        <input type="checkbox" id="check">
    </div>

    <div class="break"></div>
    <div class="btn-sign-up"></div>
    </div>

    <input type="text" name="test" id="test" onkeypress="check(this.value);">
    Your value: <span id="result"> </span>
</head>


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
        function checkEmail(id)
        {
            document.getElementById("result").innerHTML = document.getElementById("email").value.length;

            if (document.getElementById("email").value.length > 2) {
                document.getElementById("email").style.color = 'red';
            }
            else {
                document.getElementById("email").style.color = 'black';
            }
        }

        $(document).ready(function() {
            $("#check").keypress(function(){
                alert($(this).val());
            });
        });
    </script>


    </body>

</html>




<?php

if (isset($_GET['test']))
{
    echo $_GET['email'];
}
else
{
    echo "nope";
}


