<?php
require "test.php";

isLogged();

$constants = array(0, 32, 15, 19, 4, 21, 2, 25, 17, 34, 6, 27, 13, 36, 11, 30, 8, 23, 10, 5, 24, 16, 33, 1, 20, 14, 31, 9, 22, 18, 29, 7, 28, 12, 35, 3, 26);

$winningNumber = rand(0, 36);
$winningSum = checkWin($winningNumber);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ROULETTE</title>
    <link href="./../Visual/roulette/wheel.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="../Visual/menu.css" rel="stylesheet" type="text/css">

</head>
<body>



    <div class="box-background">
        <a href="endgame.php">
            <div class="btn-go-back">
                <div class="text-btn-go-back">Back</div>
            </div>
        </a>
    </div>

    <div class="box-holder">
        <div class="wheel"></div>
        <div class="ball"></div>
    </div>

    <div class="text-winnings"><?php echo number_format($winningSum, 2, '.')?>$</div>

    <script type="text/javascript">
        window.addEventListener('load', spin, false);
        function spin()
        {
            let angle = 360/37 * <?php echo array_search($winningNumber, $constants)?>;
            let wheel = document.querySelector('.wheel');
            let ball = document.querySelector('.ball');
            setTimeout(showWinnings, 5000);
            wheel.style.transform = "rotate(" + (1440 - angle) + "deg)";
            ball.style.transform = "rotate(" + -(1440) + "deg)";
        }

        function showWinnings()
        {
            let winAmount = <?php echo $winningSum ?>;
            document.querySelector('.text-winnings').style.opacity = 100;
            document.querySelector('.btn-go-back').style.opacity = 100;
            if (winAmount > 0)
            {
                document.querySelector('.text-winnings').style.color = "greenyellow";
            }
            else
            {
                document.querySelector('.text-winnings').style.color = "red";
            }
        }

    </script>


</body>
</html>

