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
            <div class="sprzedarz">
                <div class = "produkt">
                    <span class="Opis">Nazwa obrazka</span>
                    <input class="obraz" id="obraz">
                </div>
                <div class="NazwaCenna">
                    <span class="Nazwa" id="Nazwa">Tytul: <input id="nazwa"></span>
                    <span class="Cenna" id="Cenna">Cenna: <input type="number" id="cenna"> zł</span><br>
                    <select class="Cenna" id="Category">
                        <?php include("template/Category.php"); ?>
                    </select><br>
                    <button class ="przycisk tak" id="CreateProduct">Zapisz</button>
                </div>
            </div>
            <div class="Desc">
                <span class="Opis" id="Opis">Opis:<br><br>
                    <textarea id="opisProduktu" class="opisProduktu"></textarea>
                </span>
            </div>
        </div>
    </div>
</body>

</html>