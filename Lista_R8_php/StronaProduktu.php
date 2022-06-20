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
        <?php
            include("template/navbar.php");
        ?>
        <div class = "content" id = "content">
            <div id="OknoProduktu">
            <?php
            include("template/OknoProduktu.php");
            ?>
            </div>
        </div>
    </div>
</body>

</html>