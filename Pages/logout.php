<?php

require "test.php";

unsetBidding();
isNotLogged();

session_start();

unset($_SESSION['logged']);
unset($_SESSION['username']);
unset($_SESSION['balance']);

//session_destroy();

header("Location: index.php");