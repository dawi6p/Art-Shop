<?php 
    session_start();
    if(isset($_SESSION['ProduktWKoszyku']) && count($_SESSION['ProduktWKoszyku']) != 0)
    {
        echo "Cart(" . count($_SESSION['ProduktWKoszyku']) . ") <img class='nie' src='shopping-cart.png' alt='koszyk'>";
    }
    else
    {
        echo "Cart <img class='nie' src='shopping-cart.png' alt='koszyk'>";
    }
?>