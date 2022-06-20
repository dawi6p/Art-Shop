<?php
session_start();
include("template/Connect.php");
include("template/script.php");

$user_data = check_login($con);

$products = array(
    array(0, "produkty/tablet5.jpg", "Kamvas 13 PRO", 3000, "lorem"),
    array(1, "produkty/tablet4.jpg", "Kamvas 13", 2000, "lorem"),
    array(2, "produkty/tablet3.jpg", "Kamvas 22 PRO", 6000, "lorem"),
  );
  $_SESSION["asortyment"] = $products;
  if(!isset($_SESSION['ProduktWKoszyku']))$_SESSION['ProduktWKoszyku'] = array();
  //$_SESSION['produkty'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("template/head.php"); ?>
    <script>
        function transfer(value)
        {
            let temp = Number(value);
            console.log(value);

            $.ajax ({
            data: {"licz": temp},
            url:  'template/ObecnyProdukt.php',
            type: 'post'
            });

            location.href = "StronaProduktu.php";
        }
    </script>
</head>

<body>
    <div class = "wraper" id = "wraper">
        <?php
            include("template/navbar.php");
        ?>
        <div class = "content" id = "content">
            <span class = "znaleziono" id = "znaleziono">Znaleziono 3 ogłoszeń dla "Tablet Graficzny"</span>
            <div class = "wyszukane" id = "wyszukane">
            </div>
            <div class = "paningacja"><button class="przycisk"><-Poprzedni</button><button class="przycisk">Następny-></button></div>
        </div>
    </div>
</body>

</html>