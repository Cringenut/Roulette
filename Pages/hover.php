<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Execute a Function on Hover Using JQuery</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<h1 id="test">Hover Over Me!</h1>
</body>
</html>

<script>
    $("#test").hover(function(){
        $(this).css("background-color", "red");
    }, function(){
        $(this).css("background-color", "yellow");
    });
</script>