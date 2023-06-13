<?php


$conn = mysqli_connect('localhost', 'root', '', 'test_db');

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



