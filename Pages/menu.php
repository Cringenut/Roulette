<?php

global $conn;
function connectToDatabase()
{
    $sname = "localhost";
    $unmae = "root";
    $password = "";

    $db_name = "test_db";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
}
function checkLoginData()
{

}

function checkRegistrationData()
{

}
function login()
{
    session_start();
    $_SESSION['logged'] = true;
}

if (!isset($_SESSION['logged']))
{
    $_SESSION['logged'] = null;
}

if (!isset($_SESSION['login']))
{
    $_SESSION['login'] = null;
}

if (!isset($_SESSION['password']))
{
    $_SESSION['password'] = null;
}