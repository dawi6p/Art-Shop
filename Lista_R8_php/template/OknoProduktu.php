<?php
//session_start();
include("Connect.php");

if(isset($_SESSION['ObecnyProdukt']))
{
    $query = "select * from produkty p INNER JOIN category c ON c.id = p.Category_id WHERE p.Id = '" . $_SESSION['ObecnyProdukt'] . "';";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0) $ele = mysqli_fetch_array($result);
    else echo 404;

    //$ele = $_SESSION['asortyment'][$_SESSION['ObecnyProdukt']];
    $cos = "'input[type=number]'";

    //var_dump($ele);
    echo '<div class="sprzedarz">
    <div class = "produkt">
        <img src = "' . $ele['Obraz'] . '" class="obraz" alt="tablet graficzny">
    </div>
    <div class="NazwaCenna">
        <span class="Nazwa" id="Nazwa">' . $ele['Nazwa'] . '</span>
        <span class="Cenna" id="Cenna">Cenna: ' . $ele['Cenna'] . ' zł</span><br>
        <div class="ilosc">
            <span>Ilość:</span>
            <button onclick="this.parentNode.querySelector(' . $cos . ').stepDown()" class="minus">-</button>
            <input class="quantity" min="1" id="quantity" value="1" type="number">
            <button onclick="this.parentNode.querySelector(' . $cos . ').stepUp()" class="plus">+</button>
        </div>
        <button class="przycisk tak" id = "DodajDoKoszyka">Dodaj do koszyka<img class="nie" src="shopping-cart.png"></button>
    </div>
    </div>
    <div class="Desc">
        <span class="Opis" id="Opis">Opis:<br><br>' . $ele['Opis'] . '
        </span>
    </div>';
}
else echo 404;
?>