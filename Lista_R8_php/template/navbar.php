<?php
include("template/Connect.php");

?>

<div class = "header" id = "header">
<div class = "tytul" id = "tytul">
    <span id="home">Art shop</span><br>
    <a>Suported by PWSZ</a>
    <div class = "wyszukaj">
        <input placeholder="Przeszukaj nasz katalog" class="input" id="wyszukiwarka">
        <button class = "przycisk" id = "wyszukaj"><img class="nie" src = "loupe.png" alt="serch"></button>
    </div>
</div>
<div id = "menu">
    <div class="menu"><button class = "przycisk" id="zaloguj"><?php
    if($user_data == null) echo "Login";
    else echo "Logout";
    ?></button>
    <button class = 'przycisk' id="koszyk"><?php
    if(isset($_SESSION['ProduktWKoszyku']) && count($_SESSION['ProduktWKoszyku']) != 0)
    {
        echo "Cart(" . count($_SESSION['ProduktWKoszyku']) . ") <img class='nie' src='shopping-cart.png' alt='koszyk'>";
    }
    else
    {
        echo "Cart <img class='nie' src='shopping-cart.png' alt='koszyk'>";
    }
    ?></button></div>
    <?php
    if($user_data != null) echo "<div class='next'>Hello $user_data[Name] $user_data[Surname]</div>"
    ?>
</div>
</div>