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
            <div class="BigPolecane" id = "polecane">
                <div class = "produkt">
                    <img src = "produkty/tablet1.jpg" class="obraz" alt="tablet graficzny">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
            </div>
            <label for="polecane" class="naglowek">Tablety Graficzne:</label>
            <div class="polecane" id = "polecane">
                <div class = "produkt">
                    <img src = "produkty/tablet1.jpg" class="obraz" alt="tablet graficzny">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/tablet2.jpg" class="obraz" alt="tablet graficzny">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/tablet3.jpg" class="obraz" alt="tablet graficzny">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/tablet4.jpg" class="obraz" alt="tablet graficzny">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/tablet5.jpg" class="obraz" alt="tablet graficzny">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
            </div>
            <label for="polecane" class="naglowek">Zestawy Farb:</label>
            <div class="polecane" id = "polecane">
                <div class = "produkt">
                    <img src = "produkty/paint set1.jpg" class="obraz" alt="farby">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/paint set2.jpg" class="obraz" alt="farby">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/paint set3.jpg" class="obraz" alt="farby">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/paint set4.jpg" class="obraz" alt="farby">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
                <div class = "produkt">
                    <img src = "produkty/paint set5.jpg" class="obraz" alt="farby">
                    <span>Kamvas 13 PRO</span>
                    <span>Cenna: 3000 zł</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>