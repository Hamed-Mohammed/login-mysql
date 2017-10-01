<?php require 'php/connection.php'; ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/master.css">

</head>
<body>
<br>

    <center>

<form class="ff " autocomplete="on" action="php/check.php" method="post">
    <h2>Hi</h2>
    <hr>
    <h3>Enter your name</h3>
    <input type="text" name="username">
    <br>
    <h3>Enter your password</h3>
    <input type="password" name="pass">
    <br>
    <br>
    <input type="submit" value="login">
</form>

    </center>

</body>
</html>
