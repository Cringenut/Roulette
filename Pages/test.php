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

if (!isset($_SESSION['password']))
{
    $_SESSION['bidding'] = null;
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
        $_SESSION['bidding'] = array();
    }
    else
    {
        session_abort();
        $_SESSION['logged'] = null;
        $_SESSION['username'] = null;
        $_SESSION['bidding'] = null;
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

function unsetBidding()
{
    session_start();
    if (isset($_SESSION['bidding']))
    {
        $_SESSION['bidding'] = array();
    }
}

function getTotalBid(): float
{
    return floatval(array_sum($_SESSION['bidding']));
}

function checkBid($bid): bool
{
    echo number_format(floatval($bid), 2, '.', '');
    return
        preg_match('/^[0-9]*\.[0-9]{2}$/', number_format(floatval($bid), 2, '.', ''))
        && (getTotalBid()+$bid <= getBalance($_SESSION['username']));
}