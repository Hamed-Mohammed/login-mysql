<?php
session_start();
require 'php/connection.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welocme</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>

    <p class="w">Welcome</p>
    <br>

<br><br>

<?php

if(isset($_SESSION['login'])) {

    echo "<p class=\"text\">{$_SESSION['login']}</p>";
    echo "<p class=\"text\"> <a href='php/logout.php'>logout</a></p>";

}
else{
    echo "<p class=\"text\"> Please Sign in</p>";
    echo "<p class=\"text\"><a href='login.php'> login</a></p>";


}
mysqli_close($con);
?>



</body>
</html>