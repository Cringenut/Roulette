<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Golden Star: login</title>
    <link href="../Visual/login/login.css" rel="stylesheet" type="text/css">

    <div class="img-background">
        <img class="img-background" src="../Visual/login/png/login.png"  alt="logo.png"/>
    </div>

    <a class="" href="index.php" target="_self">
        <div class="box-logo-holder">
            <img class="img-logo-big" src="../Visual/index/png/logo.png"  alt="logo.png"/>
        </div>
    </a>

    <div class="box-login-holder">
        <div class="break"></div>
        <div class="box-register-login-holder">
            <a class="btn-sign-up-select" href="registration.php" target="_self">
                <div class="btn-sign-up-select">
                    <div class="text-sign-up">SIGN UP</div>
                </div>
            </a>
            <div class="break-login-register"></div>
            <div class="btn-sign-in-select">
                <div class="text-sign-in">SIGN IN</div>
            </div>
        </div>

        <div class="box-registration-text">
            <div class="text-login"</div>LOGIN</div>
    </div>
    <input type="text" placeholder="Login">
    <div class="break"></div>
    <input type="password" placeholder="Password">
    <div class="break"></div>
    <div class="break"></div>
    <div class="btn-sign-in"></div>
    </div>

</head>


<?php

$validUsername = false;
$validPassword = false;