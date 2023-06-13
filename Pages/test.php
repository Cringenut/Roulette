<?php

if (!isset($_SESSION['logged']))
{
    $_SESSION['logged'] = null;
}

if (!isset($_SESSION['login']))
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
    var_dump($sql);
    $result = mysqli_query($conn, $sql);

    $sqlPassword = mysqli_fetch_all($result);
    $sqlPassword = implode($sqlPassword[0]);

    if ($sqlPassword == $password)
    {
        $_SESSION['logged'] = true;

    }
}
function getBalance($username)
{
    if (isset($conn))
    {
        echo "connected";

        $sql = 'SELECT balance FROM users WHERE username = ' + $username;
        $result = mysqli_query($conn, $sql);

        return mysqli_fetch_assoc($result);
    }
}



