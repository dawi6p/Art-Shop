<?php
session_start();

include("template/Connect.php");
include("template/script.php");

$user_data = check_login($con);
if($user_data == null) 
{
    header("location: StronaGlowna.php");
    die;
}
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
            <div class = "dostawa"><span>Dane Osobowe</span></div>
            <div class = "dostawa">
                <div>Imie: <br><input id="Imie"></div>
                <div>Nazwisko: <br><input id="Nazwisko"></div>
                <div>NR. Telefonu: <br><input id="Telefon"></div>
                <div>E-mail: <br><input id="email"></div>
            </div>
            <div class = "dostawa"><span>Adres Dostawy</span></div>
            <div class = "dostawa">
                <div>Miasto: <br><input id="Miasto"></div>
                <div>Kod-Pocztowy: <br><input id="Kod"></div>
                <div>Ulica: <br><input id="Imie"></div>
                <div>NR. Domu: <br><input id="Nazwisko"></div>
            </div>
            <div class = "dostawa"><span>Sposób Dostawy</span></div>
            <div class = "dostawa">
                <div>Odbiór Osobisty (free): <input id="Osobisty"type="radio"></div>
                <div>Kurier (10 zł): <input id="kurier" type="radio"></div>
            </div>
            <div class = "dostawa"><span>Sposób Płatnosci</span></div>
            <div class = "dostawa">
                <div>Blik: <input id="Blik"type="radio"></div>
                <div>Przelew: <input id="Przelew" type="radio"></div>
                <div>Konto Sklepowe: <input id="Konto" type="radio"></div>
            </div>
            <div class = "dostawa">
                <span>Łącznie: 3610 zł</span>
                <button class="przycisk tak">Zamów</button>
            </div>
        </div>
    </div>
</body>

</html>