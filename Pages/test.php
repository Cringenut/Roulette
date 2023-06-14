<?php

if (!isset($_SESSION['logged']))
{
    $_SESSION['logged'] = null;
}

if (!isset($_SESSION['username']))
{
    $_SESSION['username'] = null;
}

if (!isset($_SESSION['password']))
{
    $_SESSION['balance'] = null;
}

function checkLoginUsernameAndPassword($username, $password)
{
    $conn = mysqli_connect('localhost', 'root', '', 'test_db');

    $sql = 'SELECT password FROM users WHERE username = '."\"$username\"";
    $result = mysqli_query($conn, $sql);

    $sqlPassword = mysqli_fetch_all($result);
    $sqlPassword = implode($sqlPassword[0]);

    if ($sqlPassword === $password)
    {
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $username;
    }
    else
    {
        session_abort();
        $_SESSION['logged'] = null;
        $_SESSION['username'] = null;
    }
}
function getBalance($username): string
{
    $conn = mysqli_connect('localhost', 'root', '', 'test_db');

    $sql = 'SELECT balance FROM users WHERE username = '."\"$username\"";
    $result = mysqli_query($conn, $sql);

    $sqlBalance = mysqli_fetch_all($result);

    return implode($sqlBalance[0]);
}

function isLogged()
{
    session_start();
    if (isset($_SESSION['logged']) == null)
    {
        header("Location: login.php");
    }
}

function isNotLogged()
{
    session_start();
    if (isset($_SESSION['logged'])) {
        header("Location: index.php");
    }
}

function setBidding()
{
    $_SESSION['bidding'] = array();
}

