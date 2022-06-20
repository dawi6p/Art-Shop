<?php
session_start();
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
                    <p>Name:</p><input name="Name">
                    <p>Surname:</p><input name="Surname">
                    <p>E-mail:</p><input name="Email">
                    <p>Password:</p><input type="password" name="Password"><br>
                    <?php include("template/register.php"); ?>
                    <input class ="przycisk tak" type="submit" value="Register">
                </form>
                <a href="StronaLogin.php">Login</a>
            </div>
       </div>
    </div>
</body>

</html>