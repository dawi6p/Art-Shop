<?php
session_start();

if(isset($_SESSION['ProduktWKoszyku']))
{
    echo '<div class = "ProduktKoszyk">
    <span>Koszyk:</span>
    </div>';

    foreach($_SESSION['ProduktWKoszyku'] as &$ele)
    {
        $temp = "'input[type=number]'";
        echo '<div class = "ProduktKoszyk">
        <img src = "' . $ele[2] .'" class="obraz" alt="tablet graficzny">
        <span>' . $ele[3] . '</span>
        <div class="ilosc">
            <span>Ilość:</span>
            <button id="change" onclick="minus(' . $ele[0] . ')" class="minus">-</button>
            <input class="quantity" min="0" id="quantity' . $ele[0] . '" value="' . $ele[1] . '" type="number">
            <button id="change" onclick="plus(' . $ele[0] . ')" class="plus">+</button>
        </div>
        <span>' . $ele[4] . ' zł</span>
        </div>';
    }

    $cenna = 0;
    foreach($_SESSION['ProduktWKoszyku'] as &$ele)
    {
        $cenna += $ele[1] * $ele[4];
    }
    $cos = "Łącznie: " . $cenna . " zł";

    echo '<div class = "ProduktKoszyk">
    <span id="cenna">'. $cos .'</span>
    <button class="przycisk tak">Przejdź Do Zamówienia</button>
    </div>';
}
?>

