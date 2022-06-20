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
else
{
    if($user_data['Role'] != 'Worker' && $user_data['Role'] != 'Admin') 
    {
        header("location: StronaGlowna.php");
        die;
    }
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
            <div class = "dostawa">
                <div class="tabTitle">
                    <span>ID</span>
                    <span>Klient</span>
                    <span>Adres</span>
                    <span>razem</span>
                    <span>Metoda Płatnosci</span>
                    <span>Stan Płatnosci</span>
                    <span>Metoda Dostawy</span>
                    <span>Data</span>
                </div>
            </div>
            <div class = "dostawa">
                <button class="szukaj"><img class="nie" src = "loupe.png"></button>
                <div class="tabContent">
                    <input>
                    <input>
                    <input>
                    <input>
                    <input>
                    <input>
                    <input>
                    <input>
                </div>
            </div>
            <div class = "dostawa">
                <div class="tabContent">
                    <span id=ID>1</span>
                    <span id=Klient>Dawid Gach</span>
                    <span id=Adres>Kłodzko Korczaka</span>
                    <span id="razem">3600 zł</span>
                    <span id=Płatnosc>Blik</span>
                    <span id=Stan>Zapłacone</span>
                    <span id=Dostawa>Kurier</span>
                    <span id=Data>10-10-2022</span>

                    <span id=ID>2</span>
                    <span id=Klient>Paweł Porosło</span>
                    <span id=Adres>Kalinowice Górne</span>
                    <span id="razem">100 zł</span>
                    <span id=Płatnosc>Konto Sklepowe</span>
                    <span id=Stan>Oczekuje na Potwierdzenie</span>
                    <span id=Dostawa>Paczkomat</span>
                    <span id=Data>12-10-2022</span>

                    <span id=ID>3</span>
                    <span id=Klient>Kuba Branszteter</span>
                    <span id=Adres>Bożnowice</span>
                    <span id="razem">100000 zł</span>
                    <span id=Płatnosc>Przelew</span>
                    <span id=Stan>Błąd Transakcji</span>
                    <span id=Dostawa>Paczkomat</span>
                    <span id=Data>11-10-2022</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>