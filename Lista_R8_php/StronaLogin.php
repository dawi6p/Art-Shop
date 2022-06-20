<?php
session_start();
include("template/Connect.php");
include("template/script.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("template/head.php"); ?>
</head>

<body>
    <div class = "wraper" id = "wraper">
        <div class = "content log" id = "wraper">
            <div class = "produkt">
                <form method="post">
                    <p>E-mail:</p><input name="Email">
                    <p>Password:</p><input type="password" name="Password"><br>
                    <?php include("template/login.php"); ?>
                    <input class ="przycisk tak" type="submit" value="Login">
                </form>
                <a href="StronaRegister.php">Register</a>
            </div>
       </div>
    </div>
</body>

</html>