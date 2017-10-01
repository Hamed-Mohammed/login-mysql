<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/master.css">

</head>
<body>
<?php
require 'connection.php';
session_start();
$usname=$_POST['username'];
$passw=$_POST['pass'];

$sql="SELECT username, password FROM hw2log WHERE username='$usname' AND password='$passw' ";

$result = mysqli_query($con,$sql);

if (!$row=mysqli_fetch_assoc($result))
{
    ?>

    <center>
    <form class="ff" autocomplete="on" action="../login.php">
    <h2>>_<
        <br><br>Oops
        <br><br>
     The Username <br>OR <br> Password error
    </h2>
        <input type="submit"value="Retype User Name or Password">
    </form>
    </center>
<?php
}
else
{
    $_SESSION[login]=$row['username'];
    header('location:../index.php');

}
mysqli_close($con);
?>
</body>
</html>
